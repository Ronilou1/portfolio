<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


route::get('/about', function(){
    return view('about');
});

route::get('/product', function(){
    return view('product', ['name' => 'Shoes']);
});

route::get('/portfolio', function(){
    return view('portfolio');
});

route::get('/name/{name?}', function($name = ' Guest'){
    return ('My name is'. $name);
});
