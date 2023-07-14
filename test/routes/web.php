<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user');
});

//Route::get('post', function () {
//    return view('post');
//});



Route::get('post/{post}', function ($slug) {

//    $path=__DIR__."/../resources/posts/{$slug}.html";
//
//    $todirect=file_get_contents($path);
//
//    return view('post',["post"=>$todirect]);



    return view('post',["post"=>post::find($slug)]);

});




//Route::post("user",function (Request $request){
//    return $request;
//});
