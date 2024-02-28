<?php

use App\Http\Controllers\chatsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FacebookAuthcontroller;
use App\Http\Controllers\FriendsController;
use App\Http\Controllers\GoogleAuthcontroller;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Testcontroller;
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
})->name("dashboard");

Route::middleware('auth')->group(function () {
    Route::get('/chats', [FriendsController::class, 'index'])->name("chats");
    Route::get('/blank-chat', [chatsController::class, 'index'])->name("blank-chat");
});
// Route::get('/chats', function () {
//     return view('chats');
// })->name("chats");

// ->middleware(['auth', 'verified'])->name('dashboard');

Route::get('auth/google', [GoogleAuthcontroller::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthcontroller::class, 'callbackGoogle']);

Route::get('auth/facebook', [FacebookAuthcontroller::class, 'redirect'])->name('facebook-auth');
Route::get('auth/facebook/call-back', [FacebookAuthcontroller::class, 'callbackFacebook']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/addimage', [ProfileController::class, 'addimage'])->name('profile.addimage');
    Route::get('/profileedit', [ProfileController::class, 'edit'])->name('invitation.generate');
    
});




Route::get('test', [Testcontroller::class, 'test']);
Route::view('bbb', 'checkingWebsocket');
require __DIR__ . '/auth.php';

require __DIR__ . '/auth.php';
