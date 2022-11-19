<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return  view('home');
});

Route::get('/about', function () {
    return  view('about');
});

Route::get('/book', [BookController::class, 'index']);
Route::get('/detail_book/{book:nama}', [BookController::class, 'show']);   



// Route::get('/publisher', function () {});
Route::get('/publisher', [PublisherController::class, 'index']);
Route::get('/detail_publisher/{publisher:nama}', [PublisherController::class, 'show']);  