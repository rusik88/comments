<?php

use Illuminate\Support\Facades\Route;


Route::get( '/', 'App\Http\Controllers\Comments\CommentsController@index')->name('home');
Route::get( '/recursion', 'App\Http\Controllers\Comments\CommentsController@recursionOther')->name('recursion');
