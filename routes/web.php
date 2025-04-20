<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $users = \App\Models\User::all();
    return view('welcome', ['users' => $users]);
});

Route::resource('authors', AuthorController::class);

//Route::get('/authors', function () {
//    $authors = \App\Models\Author::all();
//    return view('welcome', ['authors' => $authors]);
//});
