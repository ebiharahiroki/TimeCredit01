<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TwitterUser; 
use Laravel\Socialite\Facades\Socialite;
use App\Models\Year;
use App\Models\Hour;
use Illuminate\Support\Facades\Auth;

class TwitterController extends Controller
{
    public function login(Request $request, Hour $hour, Year $year)
    {
        if (!$request->isMethod('post')) {
            return view('hours.chart');
        }
        // ツイートボタンを押したら、Twitterの認証画面へ
        return Socialite::driver('twitter')
            ->with(['year' => $year])
            ->scopes(['tweet.read', 'tweet.write', 'users.read'])
            ->redirect();
        
        return view('hours.chart', compact('array'))->with(['year' => $year]);
    }
    
    // public function logout(Request $request)
    // {
    //     Auth::logout();
    //     return redirect('/');
    // }
        
    public function callback(Request $request)
    {
        try {
            // ユーザー情報取得
            $user = Socialite::driver('twitter')->user();
        } catch (\Exception $e) {
            return redirect('hours.chart')->with('oauth_error', '予期せぬエラーが発生しました');
        }
        
        // トークンが期限切れになる時間
        $expires_in = $user->expiresIn;
        $expires_time = new Carbon('+' . $expires_in . 'seconds');
        
        $upsert_array = [
            'twitter_id' => $user->getNickname(),
            'access_token' => $user->token,
            'token_limit' => $expires_time,
        ];
        
        $result = TwitterUsers::updateOrCreate(['twitter_id' => $upsert_array['twitter_id'] ?? NULL], $upsert_array);
        
        $request->session()->put('twitter_id', $result->twitter_id);
        
        return redirect(route('hours.chart'))->with('flashmessage', 'ログインしました');
    }
        
    public function tweet(Request $request)
    {
        if (!$request->isMethod('post')) {
            return view('hours.chart');
        }    
        
        //認証情報を取得
        $twitter_id = $request->session()->get('twitter_id');
        $twitter_user = TwitterUser::getFirstRecordByTwitterId($twitter_id);
        
        $access_token = $twitter_user->access_token;
        $client_id = config('services.twitter.client_id');
        $client_secret = config('services.twitter.client_secret');
        
        if ($twitter_user->token_limit->lt(Carbon::now())) {
            return redirect(route('hours.chart'))->with('oauth_error', 'もう一度ログインしてください');
        }
    
        $twitter = new TwitterOAuth(
            $client_id,
            $client_secret,
            null,
            $access_token,
        );
        
        $twitter->setApiVersion("2");
        
        $twitter->post("tweets", ["text" => $request->input('tweet')], true);
        if ($twitter->getLastHttpCode() == 201) {
            $result_message = 'ツイートしました。';
        } else {
            $result_message = 'ツイートに失敗しました。';
        }
        return view('hours.chart', ['flashmessage' => 'result_message']);
    }
}
        
