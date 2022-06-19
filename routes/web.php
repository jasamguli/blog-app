<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index']);
//Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::post('/sendEmail', [MailController::class, 'sendEmail'])->name('sendEmail');

//Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Route::get('/logout', function () {
//    auth()->logout();
//    return redirect('/');
//})->name('logout');

Route::get('/post/{slug}', [HomeController::class, 'post'])->name('post');

Route::middleware('auth')->group(function (){
    Route::get('/admin', [PostController::class, 'index'])->name('admin');
    Route::resource('/admin/post', PostController::class);

    Route::get('/admin/users', [UserController::class, 'index'])->name('user.index');
    Route::get('/admin/myProfile', [UserController::class, 'myProfile'])->name('myProfile');
    Route::get('/admin/myProfile/update', [UserController::class, 'updateUser'])->name('user.update');
    Route::get('/admin/users/{user}/destroy', [UserController::class, 'destroyUser'])->name('user.destroy');

});
