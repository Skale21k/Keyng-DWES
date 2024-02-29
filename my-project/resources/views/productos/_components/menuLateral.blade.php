<div class="menuIndex" id="menuIndex">
    <h2>Categorías</h2>

    <ul>
        @foreach($categorias as $categoria)
        <li>
            <a href="{{ route('productos.productosCat', $categoria->id) }}">{{$categoria->nombre}}</a>
        </li>
        @endforeach
    </ul>
</div>
<button id="toggleMenu">Toggle Menu</button>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var menu = document.querySelector('.menuIndex');

    document.getElementById('toggleMenu').addEventListener('click', function() {
        menu.classList.toggle('collapsed');
    });
});
</script>
