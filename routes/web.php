<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return view('welcome');
});
Route::get('/home', function () {
   return view('homePage');
});
Route::get('/login', function () {
   return view('loginPage');
});
Route::get('/sign', function () {
   return view('SiginPage');
});
