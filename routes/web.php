<?php

 use Illuminate\Support\Facades\Route;

 Route::get('/', function () {
    return view('home');
    
    
 });


Route::get('signin', function () {
    return view('signin');
})->name('signin');




Route::get('signup', function () {
    return view('signup');
})->name('signup');


?>
