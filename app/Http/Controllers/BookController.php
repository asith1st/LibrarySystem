<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use GuzzleHttp\Client;



class BookController extends Controller
{
    public function index()
    {

        $request = \Request::create('/api/books', 'GET');
        $response = \Route::dispatch($request);

        $responseBody = json_decode($response->getContent(), true);
        return view('books')->with('tableData', $responseBody);

    }

    public function show($id)
    {
        $request = \Request::create('/api/books/' . $id, 'GET');
        $response = \Route::dispatch($request);

        $responseBody = json_decode($response->getContent(), true);
        return view('bookdetails')->with('book', $responseBody);
    }

    public function edit($id)
    {
        $request = \Request::create('/api/books/' . $id, 'GET');
        $response = \Route::dispatch($request);

        $responseBody = json_decode($response->getContent(), true);
        return view('bookedit')->with('book', $responseBody);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:100|min:5',
            'author' => 'required|max:100|min:5',
            'publication_year' => 'required|max:4|min:4',
        ]);

        $request = Request::create('/api/books/' . $request->id, 'PUT', [
            'title' => $request->title,
            'author' => $request->author,
            'publication_year' => $request->publication_year
        ]);
        $response = Route::dispatch($request);

        return redirect()->route('books');
    }

    public function add()
    {
        return view('bookadd');
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:100|min:5',
            'author' => 'required|max:100|min:5',
            'publication_year' => 'required|max:4|min:4',
        ]);

        $request = Request::create('/api/books/', 'POST', [
            'title' => $request->title,
            'author' => $request->author,
            'publication_year' => $request->publication_year
        ]);
        $response = Route::dispatch($request);

        return redirect()->route('books');
    }

    public function delete($id)
    {
        $request = \Request::create('/api/books/' . $id, 'DELETE');
        $response = \Route::dispatch($request);

        $responseBody = json_decode($response->getContent(), true);
        return redirect()->back();
    }
}
