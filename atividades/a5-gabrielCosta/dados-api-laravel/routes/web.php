<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use \App\Models\Balde;
use \App\Models\Objeto;
use \App\Models\Book;


// Incio de BooksAPI --------------------------------------------------------------------

//para funcionar, foi necessário desativar o csrf token
// Route::post('/books/store',  function(Request $request){

//     Book::create([
//         'title'=>$request->title,
//         'author'=>$request->author,
//     ]);
// });


// Route::get('/books/books',  function(Request $request){
//     $dados = Book::all();
//     return response()->json($dados);

// });


// //para funcionar, foi necessário desativar o csrf token
// Route::delete('/books/book/delete',  function(Request $request){
//     $dados = Book::find($request->id);
//     $dados->delete();
// });


// Route::put('/books/books/update',  function(Request $request){
//     $book = Book::find($request->id);

//     $upbook = $book->update([
//         'title'=>$request->title,
//         'author'=>$request->author
//     ]);

    
//     return response()->json($upbook);
// });


// Route::get('/books/books/show',  function(Request $request){
//     $book = Book::find($request->id);
    
//     return response()->json($book);
// });

// Fim de BooksAPI --------------------------------------------------------------------

