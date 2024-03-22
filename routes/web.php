<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\tutoAuth\UserAuthController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('auth')->controller(UserAuthController::class)->name('user.auth.')->group(function() {

    Route::get('/login','login')->name('login');

    Route::post('/login','doLogin')->name('doLogin');

    Route::get('/create','create')->name('create');

    Route::post('/create','doCreate')->name('doCreate');

    Route::post('/logout','logout')->name('logout');

    Route::post('/logout/all','logoutOnAll')->name('logoutOnAll');

});

Route::get('/home',[HomeController::class,'index'])->middleware(['auth'])->name('home');

Route::get('/secret',[HomeController::class,'secret'])->middleware(['auth'])->name('secret');

Route::post('/home',[HomeController::class,'store'])->name('home.store');

Route::get('/home2',[PostController::class,'index']);


Route::fallback([HomeController::class,'error'])->name('errorpage');



/* breeze routes */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
