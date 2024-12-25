<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('dashboard');
});
Route::get('/create-task', function () {
    return view('add_task');
});