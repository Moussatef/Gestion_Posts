<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\Auth\RegisterController;

use App\http\Controllers\ProfileController;
use App\http\Controllers\Auth\loginController;
use App\http\Controllers\Auth\logoutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;

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




Route::get('/users/{user}/posts', [UserPostController::class, 'index'])->name('users.posts');









Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/posts/{id}/edit', [PostController::class, 'editpost'])->name('post.edit');
Route::put('/posts/edit', [PostController::class, 'update'])->name('post.editpost');


Route::post('/posts/{post}/comment', [CommentController::class, 'store'])->name('posts.comment');


Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes');




Route::group(['middleware' => ['AuthCheck']], function () {
    Route::get('/login', [loginController::class, 'index'])->name('login');
    Route::post('/login', [loginController::class, 'store']);
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/logout', [logoutController::class, 'store'])->name('logout');
});

Route::post('/admin/login', [loginController::class, 'admin']);
Route::get('/admin/login', function () {
    return view('auth.adminlogin');
})->name('admin.login');

Route::get('/home', function () {
    return view('posts.home');
})->name('home');


Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {


        Route::get('/admin/login', function () {
            return view('auth.adminlogin');
        })->name('admin.login');

        Route::post('/admin/login', [loginController::class, 'admin'])->name('admin.login');
        //   Route::view('/login','dashboard.admin.login');
        //   Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
        Route::view('/dashboard', 'Admin.adminDash');
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
        Route::delete('/dashboard/{post}', [AdminController::class, 'delete'])->name('delete.post');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    });
});


// Route::get('/posts', function () {
//     return view('posts.index');
// });
