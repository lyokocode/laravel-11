<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;


Route::middleware('auth')->group(function(){

    Route::get('/profilim',[DashboardController::class,'index'])->name('profile');

    Route::post('/cikis-yap', [AuthController::class, 'logout'])->name('logout');

});

Route::middleware('guest')->group(function(){
    Route::view('/giris-yap','pages/Client/Login.index')->name('login');
    Route::view('/kayit-ol','pages/Client/Register.index')->name('register');
    
    Route::post('/kayit-ol', [AuthController::class, 'register']);
    Route::post('/giris-yap', [AuthController::class, 'login']);

});

Route::view('/', 'pages/Client/Home.index')->name('home');

Route::view('/bloglar', 'pages/Client/Blogs.index')->name('blogs');

// Route::view('/kesfet', 'pages/Client/Explore.index')->name('explore');

Route::get('/kesfet', [PostController::class, 'index'])->name('explore');


Route::view('/projeler','pages/Client/Projects.index')->name('projects');

Route::view('/soru-cevap','pages/Client/Topic.index')->name('topic');

Route::resource('posts', PostController::class);


Route::view('/admin-post','pages/Admin.post')->name('adminpost');



Route::prefix('admin')->group(function () {
    Route::view('/home','pages/Admin.home')->name('admin-home');
    Route::view('/posts','pages/Admin.posts')->name('admin-posts');
    Route::view('/blogs','pages/Admin.blogs')->name('admin-blogs');
    Route::view('/projects','pages/Admin.projects')->name('admin-projects');

});