<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

#Create_edit
Route::get('/create_edit', function () {
    return view('category.create_edit');
})->name('create_edit');
#category_category
Route::get('/category', function () {
    return view('category.category');
})->name('categoty');

#Blog
Route::get('/blog', function () {
    return view('Blog');
})->name('blog');

#login
Route::get('/login', function () {
    return view('Login');
});

#MVC - Model View Controller


