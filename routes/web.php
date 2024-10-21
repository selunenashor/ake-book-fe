<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\RequestController;

Route::get('/login', [ViewController::class, 'showLoginForm'])->name('login');
Route::post('/login', [RequestController::class, 'login'])->name('login.submit');

Route::get('/', [ViewController::class, 'showUserMainPage'])->name('userHomePage');
Route::get('/result', [ViewController::class, 'showUserResultPage'])->name('userResultPage');
Route::get('/book', [ViewController::class, 'showBookInfoPage'])->name('bookInfoPage');
Route::get('/author', [ViewController::class, 'showArticleInfoPage'])->name('articleInfo');
