<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PostController;
Route::get('/',function(){
     return view('homepage');
});Route::get('/about',function(){
     return view('aboutpage');
});

Route::get('/contact/{name}','demController@index');