<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', function () {

    $productos = [
        ['nombre' => 'Laptop Gamer', 'precio' => 1200, 'descripcion' => 'Laptop para gaming.'],
        ['nombre' => 'Teclado Mecánico', 'precio' => 100, 'descripcion' => 'Teclado RGB con switches mecánicos.'],
        ['nombre' => 'Mouse Inalámbrico', 'precio' => 50, 'descripcion' => 'Mouse ergonómico y recargable.'],
        ['nombre' => 'EarPods', 'precio' => 14.95, 'descripcion' => 'Auriculares Inalámbricos Económicos'],
    ];
    return view('productos.index',['productos' => $productos]);
});

