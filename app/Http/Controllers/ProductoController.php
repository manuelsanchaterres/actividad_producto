<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{

    private $productos = [
        ['nombre' => 'Laptop Gamer','uri' => 'laptop_gamer', 'precio' => 1200, 'descripcion' => 'Laptop para gaming.'],
        ['nombre' => 'Teclado Mecánico','uri' => 'teclado_mecanico', 'precio' => 100, 'descripcion' => 'Teclado RGB con switches mecánicos.'],
        ['nombre' => 'Mouse Inalámbrico','uri' => 'mouse_inalambrico', 'precio' => 50, 'descripcion' => 'Mouse ergonómico y recargable.'],
        ['nombre' => 'EarPods','uri' => 'ear_pods', 'precio' => 14.95, 'descripcion' => 'Auriculares Inalámbricos Económicos'],
    ];
    public function index(){
        
		return view('productos.index',['productos' => $this->productos]);
	}
    public function show ($producto_uri) {

        foreach ($this->productos as $producto) {

            if ($producto['uri'] === $producto_uri) {
                return view('productos.producto',['producto' => $producto]);     
            }
        };

        return view('productos.index',['productos' => $this->productos]);
        
    }

    public function store (Request $request) {

        $productos = array_push($this->productos,['nombre' => $request['nombre'],'uri' => $request['uri'], 'precio' => $request['precio'], 'descripcion' => $request['descripcion']]);
        return view('productos.index',['productos' => $this->productos]);
    }
}
