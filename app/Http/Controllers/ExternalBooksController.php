<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
// use Illuminate\Http\Client\Response;

class ExternalBooksController extends Controller
{
    public function show()
    {
    	$response = Http::acceptJson()->get('https://www.anapioficeandfire.com/api/books');

    		if ($response->status() !== 200) {
                return response()->json([
                "status_code"=> 204,
                "status" => "success with error",
                "message" => "Network issues",
                "data" => []
            	]);
            }

       		$books = $response->json();
       		
       		if (empty($books)) {
                return response()->json([
                "status_code"=> 204,
                "status" => "success with error",
                "message" => "No Data found",
                "data" => []
            	]);
            }else{
            	return response()->json([
                "status_code"=> 200,
                "status" => "success",
                "data" => $books
           	   ]);
            }
    }

    public function app()
    {
    	$books = Http::acceptJson()->get('https://www.anapioficeandfire.com/api/books');

    	return view('app', [
    		'books' => json_decode($books)
    		]);
    }

}
