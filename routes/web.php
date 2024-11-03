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

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.book');
    });
    Route::get('/books', [ViewController::class, 'showAdminBooks'])->name('admin.book');
    Route::get('/book/{id}',[ViewController::class, 'showAdminBookInfo'])->name('admin.bookInfo');
    Route::get('/authors',[ViewController::class,'showAuthors'])->name('admin.author');
    Route::get('/author/{id}',[ViewController::class,'showAuthorInfo'])->name('admin.authorInfo');

    Route::post('/book/create', [RequestController::class, 'addBook'])->name('admin.addBook');

    Route::post('/author/create',[RequestController::class, 'addAuthor'])->name('admin.addAuthor');
    Route::post('/author/edit',[RequestController::class, 'editAuthor'])->name('admin.editAuthor');
    Route::post('/author/delete/{id}', [RequestController::class, 'delAuthor'])->name('admin.deleteAuthor');
});
