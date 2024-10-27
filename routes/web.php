<?php

use App\Http\Controllers\VimeoController;
use Illuminate\Support\Facades\Route;
use Vimeo\Laravel\Facades\Vimeo;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/upload', [VimeoController::class, 'upload'])->name('upload');

Route::get('/videos', function () {
    return Vimeo::request('/me/videos', ['per_page' => 10], 'GET');
});