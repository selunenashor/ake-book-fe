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

    public function showResultPage(Request $request){
        $keyword = $request->query('keyword');
        $response = $this->request_controller->userSearch($keyword);
        if($response->status() === 200){
            $data = json_decode($response->getContent(), true);
            if ($data["data"]["totalItems"] == 1){
                if (is_null($data["data"]["author"])){
                    return view('anonymous.bookInfo',[
                        'data' => $data["data"]["bookDetail"],
                        'keyword' => $keyword
                    ]);
                }
                else{
                    return view('anonymous.authorInfo',[
                        'data' => $data["data"]["author"],
                        'keyword' => $keyword
                    ]);
                }
            }
            else{
                return view('anonymous.resultPage', [
                    'data' => $data["data"],
                    'keyword' => $keyword
                ]);
            }
        }
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

    public function showAdminBooks(){
        return view('admin.book', [
            'menu_selected' => 1
        ]);
    }

    public function showAdminBookInfo($id){
        return view('admin.bookInfo', [
            'menu_selected' => 1
        ]);
    }

    public function showAuthors(){
        $response = $this->request_controller->getAllAuthors();
        if ($response->status() === 200){
            $data = json_decode($response->getContent(), true);
        }
        return view('admin.author',[
            'menu_selected' => 2,
            'data' => $data['data']
        ]);
    }

    public function showAuthorInfo($id){
        return view('admin.authorInfo',[
            'menu_selected' => 2
        ]);
    }
}
