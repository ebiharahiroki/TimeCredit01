<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CostController;
use App\Http\Controllers\HourController;
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

Route::get('/guestLogin', [GuestLoginController::class, 'guestLogin'])->name('guestLogin');

Route::controller(CostController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/january', 'january');
    Route::get('/february', 'february');
    Route::get('/march', 'march');
    Route::get('/april', 'april');
    Route::get('/may', 'may');
    Route::get('/june', 'june');
    Route::get('/july', 'july');
    Route::get('/august', 'august');
    Route::get('/september', 'september');
    Route::get('/october', 'october');
    Route::get('/november', 'november');
    Route::get('/december', 'december');
    Route::get('/costs/total_cost', 'total_cost')->name('total_cost');
    Route::get('/costs/create_cost', 'create_cost')->name('create_cost');
    Route::post('/costs', 'store')->name('store');
    Route::get('/costs/{cost}', 'show_cost')->name('show_cost');
    Route::get('/costs/{cost}/edit', 'edit')->name('edit');
    Route::put('/costs/{cost}', 'update')->name('update');
    Route::delete('/costs/{cost}', 'delete')->name('delete');
});

Route::controller(HourController::class)->middleware(['auth'])->group(function(){
Route::get('/hours/createHour', 'createHour')->name('createHour');
Route::post('/hours', 'storeHour')->name('storeHour');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
