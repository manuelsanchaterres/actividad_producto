@foreach ($productos as $producto)
    <?php echo "<a href='{$producto["uri"]}'>{$producto["nombre"]}</a><br>" ?>
@endforeach


