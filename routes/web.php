<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\ContentsController;

//Route::get('/', function () {
//    $users = \App\Models\User::all();
//    return view('/layouts/app');
//});
//
//Route::prefix('admin')->group(function () {
//
//    Route::resource('all', AllContentController::class);
//    Route::resource('audio', CategoriesController::class);
//    Route::resource('book', BooksContentController::class);
//    Route::resource('video', VideosContentController::class);
//
//});




Route::get('/', function () {
    return view('layouts.app');
});

Route::resource('categories', CategoriesController::class);

Route::resource('authors', AuthorsController::class);

Route::resource('genres', GenresController::class);

Route::resource('contents', ContentsController::class);
