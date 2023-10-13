<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HourController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\TwitterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(HourController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/hours/create', 'create')->name('create');
    Route::post('/hours/store', 'store');
    Route::get('/hours/{hour}', 'show');
    Route::get('/hours/{hour}/edit', 'edit');
    Route::put('/hours/{hour}', 'update');
    Route::delete('/hours/{hour}', 'delete');
    Route::get('/hours/chartjs', 'edit');
});

Route::controller(ChartController::class)->middleware(['auth'])->group(function(){
    Route::get('/chart', 'chart')->name('chart');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('twitter')->group(function () {
    //ログイン
    Route::match(['get', 'post'], '/login', [App\Http\Controllers\TwitterController::class, 'login']);
    Route::get('/logout', [App\Http\Controllers\TwitterController::class, 'logout']);
    //認証リダイレクト
    Route::get('/callback', [App\Http\Controllers\TwitterController::class, 'callback']);
    //ツイートページ
    Route::group(['middleware' => 'twitter'], function () {
        Route::match(['get', 'post'], '/tweet', [App\Http\Controllers\TwitterController::class, 'tweet']);
    });
});

// Route::controller(TwitterController::class)->prefix('auth')->middleware('auth')->group(function () {
//     Route::match(['get', 'post'], '/login', 'login');
//     Route::get('/collback', 'callbakck');
//     Route::group(['middleware' => 'twitter'], function () {
//         Route::match(['get', 'post'], '/tweet', [App\Http\Controllers\TwitterController::class, 'tweet'])
//     // });
//     // Route::match(['get', 'post'], '/tweet', 'tweet');
// });

require __DIR__.'/auth.php';
