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

    public function showMainPage(Request $request){
        return view('anonymous.searchPage',[
            'username' => $request->session()->get('username')
        ]);
    }

    public function showResultPage(Request $request){
        $keyword = $request->query('keyword');
        $response = $this->request_controller->userSearch($keyword);
        if($response->status() === 200){
            $data = json_decode($response->getContent(), true);
            if ($data["data"]["data"]){
                return view('anonymous.resultPage',[
                    'data' => $data["data"],
                    'keyword' => $keyword,
                    'username' => $request->session()->get('username')
                ]);
            }
            if ($data["data"]["bookDetail"]){
                return view('anonymous.bookInfo',[
                    'data' => $data["data"]["bookDetail"],
                    'keyword' => $keyword,
                    'username' => $request->session()->get('username')
                ]);
            }
            if ($data["data"]["author"]){
                return view('anonymous.authorInfo',[
                    'data' => $data["data"]["author"],
                    'keyword' => $keyword,
                    'username' => $request->session()->get('username')
                ]);
            }
            return view('anonymous.resultPage',[
                'data' => ['data' => []],
                'keyword' => $keyword,
                'username' => $request->session()->get('username')
            ]);
        }
    }

    public function showBookInfoPage(Request $request, $id){
        $response = $this->request_controller->getBook($id);
        if ($response->status() === 200){
            $data = json_decode($response->getContent(), true);
            return view('anonymous.bookInfo',[
                'data' => $data['data'],
                'username' => $request->session()->get('username')
            ]);
        }

    }

    public function showArticleInfoPage(){
        return view('anonymous.authorInfo');
    }

    public function showUserInfo(){
        return view('user.info');
    }

    public function showAdminBooks(Request $request){
        if(!$request->session()->get('accessToken')){
            return redirect()->route('login');
        }
        $response1 = $this->request_controller->getAllBooks();
        if ($response1->status() === 200){
            $data1 = json_decode($response1->getContent(), true);
        }

        $response2 = $this->request_controller->getAllAuthors();
        if ($response2->status() === 200){
            $data2 = json_decode($response2->getContent(), true);
        }
        return view('admin.book', [
            'menu_selected' => 1,
            'data' => $data1['data'],
            'author' => $data2['data']
        ]);
    }

    public function showAdminBookInfo(Request $request, $id){
        if(!$request->session()->get('accessToken')){
            return redirect()->route('login');
        }
        $response1 = $this->request_controller->getBookAdmin($id);
        if ($response1->status() === 200){
            $data1 = json_decode($response1->getContent(), true);
        }

        $response2 = $this->request_controller->getAllAuthors();
        if ($response2->status() === 200){
            $data2 = json_decode($response2->getContent(), true);
        }
        return view('admin.bookInfo', [
            'menu_selected' => 1,
            'data' => $data1['data'],
            'author' => $data2['data']
        ]);
    }

    public function showAdminAuthors(Request $request){
        if(!$request->session()->get('accessToken')){
            return redirect()->route('login');
        }
        $response = $this->request_controller->getAllAuthors();
        if ($response->status() === 200){
            $data = json_decode($response->getContent(), true);
        }
        return view('admin.author',[
            'menu_selected' => 2,
            'data' => $data['data']
        ]);
    }

    public function showAdminAuthorInfo(Request $request, $id){
        if(!$request->session()->get('accessToken')){
            return redirect()->route('login');
        }
        $response = $this->request_controller->getAuthorAdmin($id);
        if ($response->status() === 200){
            $data = json_decode($response->getContent(), true);
        }
        return view('admin.authorInfo',[
            'menu_selected' => 2,
            'data' => $data['data']
        ]);
    }
}
