<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

#------------------------------------------------------------------------------
Route::get('/', function () {
    return view('welcome');
});
#------------------------------------------------------------------------------

#------------------------------------------------------------------------------

//Route::get('posts', function () {
//    return view('posts');
//});

#------------------------------------------------------------------------------

#------------------------------------------------------------------------------

//Route::get('posts',[PostController::class,'index']);

#------------------------------------------------------------------------------

#------------------------------------------------------------------------------

//Route::controller(PostController::class)->group(function ()
//{
//    Route::get('posts','index');
//    Route::get('posts/create','create');
//    Route::get('posts/delete','delete');
//    Route::get('posts/update','update');
//});

#------------------------------------------------------------------------------
#Controller Resource
//Route::resource('users',UserController::class);
#------------------------------------------------------------------------------
//Route::resource('users',UserController::class)->except(['create','show']);
#------------------------------------------------------------------------------
//Route::resource('users',UserController::class)->only(['create','show']);
#------------------------------------------------------------------------------
//Invokable Controller
Route::get('profile',ProfileController::class);

