<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RequestController extends Controller
{
    private static $instance;
    private $server;

    public function __construct() {
        $this->server = env('API_SERVER', '127.0.0.1:8081');
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function userSearch($keyword){
        $response = Http::get($this->server . '/api/books/search?keyword=' . $keyword);

        $statusCode = $response->status();
        if ($statusCode === 200) {
            return response()->json([
                'data' => $response->json()
            ], 200);
        } else {
            return response()->json(['msg' => "An error occurred"], 500);
        }

    }

    public function getAllBooks(){
        $response = Http::get($this->server . '/api/admin/books');

        $statusCode = $response->status();

        if ($statusCode === 200) {
            return response()->json([
                'data' => $response->json()
            ], 200);
        } else {
            return response()->json(['msg' => "An error occurred"], 500);
        }
    }

    public function getBook($id){
        $response = Http::get($this->server . '/api/admin/books/'.$id);

        $statusCode = $response->status();

        if ($statusCode === 200) {
            return response()->json([
                'data' => $response->json()
            ], 200);
        } else {
            return response()->json(['msg' => "An error occurred"], 500);
        }
    }

    public function addBook(Request $request){
        $response = Http::post($this->server . '/api/admin/books',[
            'title' => $request->input('title'),
            'authorIds' => $request->input('authorIds'),
            'genres'=> $request->input('genres'),
            'publishedAt' => $request->input('publishedAt'),
            'publisher' => $request->input('publisher'),
            'totalPages' => $request->input('totalPages'),
            'categories' => $request->input('categories'),
            'language' => $request->input('language'),
            'description' => $request->input('description'),
            'image' => $request->input('image')
        ]);

        if($response->status() === 200){
            return response()->json([], 200);
        }
        else{
            dd($response);
        }
    }

    public function editBook(Request $request){
        $response = Http::put($this->server . '/api/admin/books',[
            'id' => $request->input('id'),
            'title' => $request->input('title'),
            'authorIds' => $request->input('authorIds'),
            'genres'=> $request->input('genres'),
            'publishedAt' => $request->input('publishedAt'),
            'publisher' => $request->input('publisher'),
            'totalPages' => $request->input('totalPages'),
            'categories' => $request->input('categories'),
            'language' => $request->input('language'),
            'description' => $request->input('description'),
            'image' => $request->input('image')
        ]);

        if($response->status() === 200){
            return response()->json([], 200);
        }
        else{
            dd($response);
        }
    }

    public function delBook($id){
        $response = Http::delete($this->server . '/api/admin/books/' . $id);
        $statusCode = $response->status();
        if ($statusCode === 200){
            return response()->json([
                'data' => $response->json()
            ], 200);
        }
        else {
            dd($response);
        }
    }

    public function getAllAuthors(){
        $response = Http::get($this->server . '/api/admin/authors');

        $statusCode = $response->status();
        if ($statusCode === 200){
            return response()->json([
                'data' => $response->json()
            ], 200);
        }
        else {
            return response()->json(['msg' => "An error occurred"], 500);
        }
    }

    public function getAuthor($id){
        $response = Http::get($this->server . '/api/admin/authors/' . $id);
        $statusCode = $response->status();
        if ($statusCode === 200){
            return response()->json([
                'data' => $response->json()
            ], 200);
        }
        else {
            return response()->json(['msg' => "An error occurred"], 500);
        }
    }

    public function addAuthor(Request $request){
        $response = Http::post($this->server . '/api/admin/authors',[
            'name' => $request->input('name'),
            'stageName' => $request->input('stageName') ?? null,
            'birthDate'=> $request->input('birthDate') ?? null,
            'deathDate' => $request->input('deathDate') ?? null,
            'birthPlace' => $request->input('birthPlace') ?? null,
            'nationality' => $request->input('nationality') ?? null,
            'website' => $request->input('website') ?? null,
            'description' => $request->input('description') ?? null,
            'image' => $request->input('image') ?? null
        ]);

        if($response->status() === 200){
            return response()->json([], 200);
        }
        else{
            dd($response);
        }
    }
    public function editAuthor(Request $request){
        $response = Http::put($this->server . '/api/admin/authors',[
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'stageName' => $request->input('stageName') ?? null,
            'birthDate'=> $request->input('birthDate') ?? null,
            'deathDate' => $request->input('deathDate') ?? null,
            'birthPlace' => $request->input('birthPlace') ?? null,
            'nationality' => $request->input('nationality') ?? null,
            'website' => $request->input('website') ?? null,
            'description' => $request->input('description') ?? null,
            'image' => $request->input('image') ?? null
        ]);

        if($response->status() === 200){
            return response()->json([], 200);
        }
        else{
            dd($response);
        }
    }

    public function delAuthor($id){
        $response = Http::delete($this->server . '/api/admin/authors/' . $id);
        $statusCode = $response->status();
        if ($statusCode === 200){
            return response()->json([
                'data' => $response->json()
            ], 200);
        }
        else {
            dd($response);
        }
    }
}
