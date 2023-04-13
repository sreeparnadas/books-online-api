<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
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
    public function update(UpdateBookRequest $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }

    public function getAllBooks(){
        $books = Book::select('books.id', 'books.title', 'books.description', 'books.price', 'books.image', 'books.isbn', 'books.stock', 'authors.author_name as author_name', 'book_categories.book_category_name as category_name', 'publishers.publisher_name as publisher_name')
        ->join('authors', 'books.author_id', '=', 'authors.id')
        ->join('book_categories', 'books.book_category_id', '=', 'book_categories.id')
        ->join('publishers', 'books.publisher_id', '=', 'publishers.id')
        ->get();
        return response()->json(['success'=>1,'data'=>$books], 200,[],JSON_NUMERIC_CHECK);
    }
}
