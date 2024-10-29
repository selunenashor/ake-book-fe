<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\RequestController;

class ViewController extends Controller
{

    private $request_controller;

    public function __construct() {
        $this->request_controller = RequestController::getInstance();
    }

    public function showLoginForm(){
        return view('anonymous.login');
    }

    public function showMainPage(){
        return view('anonymous.searchPage');
    }

    public function showResultPage(){
        return view('anonymous.resultPage');
    }

    public function showBookInfoPage(){
        return view('anonymous.bookInfo');
    }

    public function showArticleInfoPage(){
        return view('anonymous.authorInfo');
    }

    public function showUserInfo(){
        return view('user.info');
    }

    public function showUserFavorite(){
        return view('user.favorite');
    }

    public function showAdminBook(){
        return view('admin.book');
    }
}
