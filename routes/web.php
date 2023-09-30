<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HourController;
use App\Http\Controllers\ChartController;

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

// Route::get('/guestLogin', [GuestLoginController::class, 'guestLogin'])->name('guestLogin');

// Route::controller(::class)->middleware(['auth'])->group(function(){
//     Route::get('/', 'index')->name('index');
//     Route::get('/index_january', 'index_january');
//     Route::get('/index_february', 'index_february');
//     Route::get('/index_march', 'index_march');
//     Route::get('/index_april', 'index_april');
//     Route::get('/index_may', 'index_may');
//     Route::get('/index_june', 'index_june');
//     Route::get('/index_july', 'index_july');
//     Route::get('/index_august', 'index_august');
//     Route::get('/index_september', 'index_september');
//     Route::get('/index_october', 'index_october');
//     Route::get('/index_november', 'index_november');
//     Route::get('/index_december', 'index_december');
//     Route::get('/hours/total_hour', 'total_hour')->name('total_hour');
//     Route::get('/hours/create_hour', 'create_hour')->name('create_hour');
//     Route::get('/hours/{hour}', 'show_hour')->name('show_hour');
//     Route::get('/hours/{hour}/edit', 'edit')->name('edit');
//     Route::put('/hours/{hour}', 'update')->name('update');
//     Route::delete('/hours/{hour}', 'delete')->name('delete');
// });

// Route::controller(CreatehourController::class)->middleware(['auth'])->group(function(){
//     Route::get('/hours/registrations/create_january_hour', 'create_january_hour');
//     Route::get('/hours/registrations/create_february_hour', 'create_february_hour');
//     Route::get('/hours/registrations/create_march_hour', 'create_march_hour');
//     Route::get('/hours/registrations/create_april_hour', 'create_april_hour');
//     Route::get('/hours/registrations/create_may_hour', 'create_may_hour');
//     Route::get('/hours/registrations/create_june_hour', 'create_june_hour');
//     Route::get('/hours/registrations/create_july_hour', 'create_july_hour');
//     Route::get('/hours/registrations/create_august_hour', 'create_august_hour');
//     Route::get('/hours/registrations/create_september_hour', 'create_september_hour');
//     Route::get('/hours/registrations/create_october_hour', 'create_october_hour');
//     Route::get('/hours/registrations/create_november_hour', 'create_november_hour');
//     Route::get('/hours/registrations/create_december_hour', 'create_december_hour');
//     Route::post('/january/hours', 'store_january_hour');
//     Route::post('/february/hours', 'store_february_hour');
//     Route::post('/march/hours', 'store_march_hour');
//     Route::post('/april/hours', 'store_april_hour');
//     Route::post('/may/hours', 'store_may_hour');
//     Route::post('/june/hours', 'store_june_hour');
//     Route::post('/july/hours', 'store_july_hour');
//     Route::post('/august/hours', 'store_august_hour');
//     Route::post('/september/hours', 'store_september_hour');
//     Route::post('/october/hours', 'store_october_hour');
//     Route::post('/november/hours', 'store_november_hour');
//     Route::post('/december/hours', 'store_december_hour');
// });


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

require __DIR__.'/auth.php';
