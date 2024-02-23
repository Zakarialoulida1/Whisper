<?php

use App\Http\Controllers\FacebookAuthcontroller;
use App\Http\Controllers\GoogleAuthcontroller;
use App\Http\Controllers\ProfileController;
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
    return view('register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('auth/google',[GoogleAuthcontroller::class,'redirect'])->name('google-auth');
Route::get('auth/google/call-back',[GoogleAuthcontroller::class,'callbackGoogle']);

Route::get('auth/facebook',[FacebookAuthcontroller::class,'redirect'])->name('facebook-auth');
Route::get('auth/facebook/call-back',[FacebookAuthcontroller::class,'callbackFacebook']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
