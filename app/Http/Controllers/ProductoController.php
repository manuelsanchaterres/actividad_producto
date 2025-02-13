<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        
        $productos = [
            ['nombre' => 'Laptop Gamer','uri' => 'laptop_gamer', 'precio' => 1200, 'descripcion' => 'Laptop para gaming.'],
            ['nombre' => 'Teclado Mecánico','uri' => 'teclado_mecanico', 'precio' => 100, 'descripcion' => 'Teclado RGB con switches mecánicos.'],
            ['nombre' => 'Mouse Inalámbrico','uri' => 'mouse_inalambrico', 'precio' => 50, 'descripcion' => 'Mouse ergonómico y recargable.'],
            ['nombre' => 'EarPods','uri' => 'ear_pods', 'precio' => 14.95, 'descripcion' => 'Auriculares Inalámbricos Económicos'],
        ];
    
		return view('productos.index',['productos' => $productos]);
	}
    public function show ($producto_nombre) {

        $productos = [
            ['nombre' => 'Laptop Gamer','uri' => 'laptop_gamer', 'precio' => 1200, 'descripcion' => 'Laptop para gaming.'],
            ['nombre' => 'Teclado Mecánico','uri' => 'teclado_mecanico', 'precio' => 100, 'descripcion' => 'Teclado RGB con switches mecánicos.'],
            ['nombre' => 'Mouse Inalámbrico','uri' => 'mouse_inalambrico', 'precio' => 50, 'descripcion' => 'Mouse ergonómico y recargable.'],
            ['nombre' => 'EarPods','uri' => 'ear_pods', 'precio' => 14.95, 'descripcion' => 'Auriculares Inalámbricos Económicos'],
        ];

        foreach ($productos as $producto) {

            if ($producto['nombre'] === $producto_nombre) {

                return view('productos.producto',['producto' => $producto]);     
            }
        };

        return view('productos.index',['productos' => $productos]);
        
    }

    public function store ($producto_nombre) {

        var_dump($producto_nombre);
    }
}
