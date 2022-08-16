<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    public function create(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->input();
            $book = new Book;

            $bookval=validator($request->all(),[
                'name'=>['required', 'string'],
                'isbn'=>'required',
                'authors'=>'required',
                'number_of_pages'=>'required',
                'publisher'=>'required',
                'country'=>'required',
                'release_date'=>'required',
            ]);

            if($bookval->fails()){
                return response()->json([
                    "status_code"=> 500,
                    "status" => "error",
                    'message' => $bookval->errors()
                 ]);
                }

            $book->name = $data['name'];
            $book->isbn = $data['isbn'];
            $book->authors = $data['authors'];
            $book->number_of_pages = $data['number_of_pages'];
            $book->publisher = $data['publisher'];
            $book->country = $data['country'];
            $book->release_date = $data['release_date'];
            $book->save();

            return response()->json([
                "status_code"=> 201,
                "status" => "success",
                "data" => $book
            ]);
        }

    }

    public function read(){
        $books = Book::get();

        if(count($books)){
            return response()->json([
                "status_code"=> 200,
                "status" => "success",
                "data" => $books
            ]);
        }else{
             return response()->json([
                "status_code"=> 200,
                "status" => "success",
                "data" => []
            ]);
        }

    }

    public function update(Request $request, $id)
    {
        $updateBook = Book::find($id);

        if ($request->isMethd('post')) {

            $data = $request->input();

                $updateBook->name = $data['name'];
                $updateBook->isbn = $data['isbn'];
                $updateBook->authors = $data['authors'];
                $updateBook->number_of_pages = $data['number_of_pages'];
                $updateBook->publisher = $data['publisher'];
                $updateBook->country = $data['country'];
                $updateBook->release_date = $data['release_date'];
                $updateBook->save();

            return response()->json([
                "status_code"=> 201,
                "status" => "success",
                "message" => "The Book my First Book was updated successfully",
                "data" => $updateBook
            ]);
        }
    }

    public function delete(Request $request, $id)
    {
        $deleteBook = Book::where('id', $id)->get();

        if (count($deleteBook)) {
            $deleteBook->delete();
            return response()->json([
                "status_code"=> 204,
                "status" => "success",
                "message" => "The Book my First Book was deleted successfully",
                "data" => []
            ]);
        }else{
            return response()->json([
                "status_code"=> 204,
                "status" => "success with error",
                "message" => "This particular Book record does not exist",
                "data" => []
            ]);
        }

    }


    public function show($id)
    {
        $books = Book::where('id',$id)->get();

        if(count($books)){
            return response()->json([
                "status_code"=> 200,
                "status" => "success",
                "data" => $books
            ]);
        }else{
             return response()->json([
                "status_code"=> 200,
                "status" => "success",
                "data" => []
            ]);
        }
    }

    public function search($name, $country, $publisher, $release_date)
    {
        $search = Book::where("name", "like", "%".$name."%")->get();
            if(count($search)){
                return response()->json([
                    'succcess' => true,
                    'message' => 'Search successful!',
                    'data'    => $search,
                ], 200);
            }
            else {
                return response()->json([
                    'succcess' => false,
                    'message' => 'Search Error',
                    'error' => 'We could not find Job related to '."'".$name."'".', Kindly try again.'
                ], 422);
            }
    }


}
