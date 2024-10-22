<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
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
        return view('anonymous.articleInfo');
    }

    public function showUserInfo(){
        return view('user.info');
    }
}
