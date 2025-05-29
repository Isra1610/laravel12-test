<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/suma', [SumaController::class, 'suma']); 
Route::post('/suma', [SumaController::class, 'suma']); 

Route::get('/productos', [ProductoController::class, 'index']);
