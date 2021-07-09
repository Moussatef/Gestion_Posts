<?php


use Illuminate\Support\Facades\Route;
use App\http\Controllers\Auth\RegisterController;
use App\http\Controllers\ProfileController;
use App\http\Controllers\Auth\loginController;
use App\http\Controllers\Auth\logoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'store']);

Route::post('/logout', [logoutController::class, 'store'])->name('logout');

Route::get('/index', function () {
    return view('posts.home');
})->name('home');


Route::get('/post', function () {
    return view('posts.index');
});