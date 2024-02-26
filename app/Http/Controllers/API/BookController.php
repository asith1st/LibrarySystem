<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return response()->json($books);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = new Book;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->publication_year = $request->publication_year;
        $book->save();
        return response()->json(["message" => "Book Added."], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = Book::find($id);
        if (!empty($book)) {
            return response()->json($book);
        } else {
            return response()->json(["message" => "Book not found"], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if (Book::where('id', $id)->exists()) {
            $book = Book::find($id);
            $book->title = is_null($request->title) ? $book->title : $request->title;
            $book->author = is_null($request->author) ? $book->author : $request->author;
            $book->publication_year = is_null($request->publication_year) ? $book->publication_year : $request->publication_year;

            $book->save();
            return response()->json(["message" => "Book Updated."], 404);
        } else {
            return response()->json(["message" => "Book Not Found."], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if (Book::where('id', $id)->exists()) {
            $book = Book::find($id);
            $book->delete();

            return response()->json(["message" => "records deleted."], 202);
        } else {
            return response()->json(["message" => "Book Not Found."], 404);
        }
    }
}
