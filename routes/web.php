<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\RequestController;

Route::get('/login', [ViewController::class, 'showLoginForm'])->name('login');
Route::post('/login', [RequestController::class, 'login'])->name('login.submit');

Route::get('/', [ViewController::class, 'showMainPage'])->name('userHomePage');
Route::get('/result', [ViewController::class, 'showResultPage'])->name('userResultPage');
Route::get('/book', [ViewController::class, 'showBookInfoPage'])->name('bookInfoPage');
Route::get('/author', [ViewController::class, 'showArticleInfoPage'])->name('articleInfo');

Route::get('/userInfo', [ViewController::class, 'showUserInfo'])->name('userInfo');
Route::get('/userFavorite', [ViewController::class, 'showUserFavorite'])->name('userFavorite');

