<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::post("users",function (Request $request)
//{
//   return $request;
//});

//Route::get('users/{id}', function (int $id) {
//    if($id==1)
//    {
//        return "Hello Admin";
//    }
//    else
//    {
//        abort(404);
//    }
//});

//Route::get('users/{id}', function (int $id) {
//return $id;
//});

//Route::get('users', function () {
//    $name='leo';
//    return view('users',compact('name'));
//});

Route::get('users', function () {
    return view('users');
});

Route::get('posts', function () {
    return view('posts');
});

