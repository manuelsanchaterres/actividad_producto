<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', [ProductoController::class,'index']);

Route::get('/productos/{producto_nombre}', [ProductoController::class,'show']);
