<div style="width: 350px; height: 800px; background-color: red; float: left;">
    <ul>
    @foreach($productos as $producto)
        <li>{{ $categoria->nombre }}</li>
    @endforeach

    </ul>
</div>
