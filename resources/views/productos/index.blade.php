@foreach ($productos as $producto)
    <x-producto-card>
        <p>{{$producto['nombre']}}</p>
        <p>{{$producto['precio']}}</p>
        <p>{{$producto['descripcion']}}</p>
    </x-product-card>
@endforeach

