<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\Home;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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


Route::get('/home',[HomeController::class,'index'])->name('home');

Route::post('/home',[HomeController::class,'store'])->name('home.store');

//Route::get('/sse',[HomeController::class,'sse'])->name('sse');

/* breeze routes */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/* Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */

require __DIR__.'/auth.php';
