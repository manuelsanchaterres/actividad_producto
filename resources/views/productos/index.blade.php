
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Producto</title>
</head>
<body>

    <h2>Crear Nuevo Producto</h2>
    
    <form action="{{ route('productos.store') }}" method="POST">
        
        @csrf  {{-- Laravel protege contra ataques CSRF --}}

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="uri">URI:</label>
        <input type="text" id="uri" name="uri" required><br><br>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.01" required><br><br>

        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" rows="4" required></textarea><br><br>

        <button type="submit">Guardar Producto</button>
    </form>

</body>
</html>


@foreach ($productos as $producto)
    <?php echo "<a href='/productos/{$producto["uri"]}'>{$producto["nombre"]}</a><br>" ?>
@endforeach


