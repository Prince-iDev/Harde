<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

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

       		$books = $response->body();
       		
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
}
