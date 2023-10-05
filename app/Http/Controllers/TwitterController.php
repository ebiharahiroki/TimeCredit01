<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hour; 
use App\Models\Month; 
use App\Models\Year; 
use Laravel\Socialite\Facades\Socialite;

class TwitterController extends Controller
{
    public function login(Request $request)
    {
        if (!$request->Method('post')) {
            return view('hours.chart');
            
        // ツイートボタンを押したら、Twitterの認証画面へ
        return Socialite::driver('twitter')
            ->scopes(['tweet.read', 'tweet.write', 'users.read'])
            ->redirect();
        }
    }
        
    public function callback(Request $request)
    {
        try {
            // ユーザー情報取得
            $user = Socialite::driver('twitter')->user();
        } catch (\Exception $e) {
            return redirect('hours.chart')->with('auth_error', '予期せぬエラーが発生しました');
        }
        
        // トークンが期限切れになる時間
        $expires_in = $user->expiresIn;
        $expires_time = new Carbon('+' . $expires_in . 'seconds');
        
        $upsert_array = [
            'twitter_id' => $user->getNickname(),
            'access_token' => $user->token,
            'token_limit' => $expires_time,
        ];
        
        $result = TwitterUsers::updateOrCreate(['upsert_id' => $upsert_array['twitter_id'] ?? NULL], $upsert_array);
        
        $request->session()->put('twitter_id', $result->twitter_id);
        
        return redirect(route('hours.chart'))->with('flashmessage', 'ログインしました');
    }
        
    public function tweet(Request $request)
    {
        //認証情報を取得
        $oauth_token = $request->session()->get('oauth_token');
        $oauth_verifier = $request->session()->get('oauth_verifier');
    
        $twitter = new TwitterOAuth(
            config('services.twitter.consumer_key'),
            config('services.twitter.consumer_secret'),
            config('services.twitter.access_token'),
            config('services.twitter.access_secret'),
        );
    
        $accessToken = $twitter->oauth("oauth/access_token", ["oauth_token" => $oauth_token,"oauth_verifier" => $oauth_verifier]);
    
        $oauthToken = $accessToken['oauth_token'];
        $oauthTokenSecret =$accessToken['oauth_token_secret'];
        //認証したユーザーのアカウントを使ってツイートができるようになります。
        $usersTwitter = new TwitterOAuth(
            config('services.twitter.consumer_key'),
            config('services.twitter.consumer_secret'),
            $oauthToken,
            $oauthTokenSecret
        );
    
        // 画像をTwitterへアップロード
        //media/uploadエンドポイントを使います。
        $media = $usersTwitter->upload('media/upload',['media' => "画像のパス"]);
    
        //Twitterへ投稿する
        $usersTwitter->post("statuses/update", [
            "status" => "ツイートするテキスト",
            "media_ids" => $media->media_id_string,
        ]);
    }
}    
