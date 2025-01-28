@foreach ($productos as $producto)
    <x-producto-card 
        :nombre="$producto['nombre']" 
        :precio="$producto['precio']" 
        :descripcion="$producto['descripcion']"
    />
@endforeach

