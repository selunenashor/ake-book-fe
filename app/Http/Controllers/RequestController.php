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
        $this->server = env('API_SERVER', '127.0.0.1:8082');
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getAllBooks(){
        $response = Http::get($this->server . '/api/admin/book');

        $statusCode = $response->status();

        if ($statusCode === 200) {
            return response()->json([
                'data' => $response->json()
            ], 200);
        } else {
            return response()->json(['msg' => "An error occurred"], 500);
        }

    }
}
