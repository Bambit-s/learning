<?php

use App\Http\Controllers\Catalog;
use App\Http\Controllers\FigurePage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/catalog/{id}', [FigurePage::class, 'show']);

Route::get('/catalog', [Catalog::class, 'catalog']);

Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/montage', function () {
    return view('montage');
});
Route::get('/delivery', function () {
    return view('delivery');
});
Route::get('/comments', function () {
    return view('comments');
});
