<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::view('/', 'pages/Client/Home.index')->name('home');

Route::view('/bloglar', 'pages/Client/Blogs.index')->name('blogs');

Route::view('/kesfet', 'pages/Client/Explore.index')->name('explore');

Route::view('/projeler','pages/Client/Projects.index')->name('projects');

Route::view('/soru-cevap','pages/Client/Explore.index')->name('topic');

Route::view('/giris-yap','pages/Client/Login.index')->name('login');

Route::view('/kayit-ol','pages/Client/Register.index')->name('register');

Route::get('/profilim',[DashboardController::class,'index'])->name('profile');


Route::post('/kayit-ol', [AuthController::class, 'register']);
Route::post('/giris-yap', [AuthController::class, 'login']);
Route::post('/cikis-yap', [AuthController::class, 'logout'])->name('logout');

