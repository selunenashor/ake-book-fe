<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function showUserMainPage()
    {
        return view('searchPage');
    }
    public function showUserResultPage()
    {
        return view('resultPage');
    }
    public function showBookInfoPage()
    {
        return view('bookInfo');
    }public function showArticleInfoPage()
    {
        return view('articleInfo');
    }
}
