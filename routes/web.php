<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "HomeController@index")->name("index");
Route::get('/post', "PostController@index")->name("post");


Auth::routes();

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->name("admin.")
    ->group(function () {
        Route::get('/', 'PostController@index')->name('index');

        Route::post("/post", "PostController@store")->name("store");

        Route::get("/post/create", "PostController@create")->name("create");

        Route::get('/post/{post}', "PostController@show")->name("show");

        Route::match(["PUT", "PATCH"], "/post/{post}", "PostController@update")->name("update");

        Route::delete("/post/{post}", "PostController@destroy")->name("destroy");

        Route::get('/post/{post}/edit', "PostController@edit")->name("edit");

        //Genera tutte le rotte necessarie per la crud dei posts
    });







