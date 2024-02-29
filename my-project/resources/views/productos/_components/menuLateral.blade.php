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
<img id="toggleMenu" src="{{ Storage::url('img/flecha.png') }}" alt="Flecha">

<script>
document.addEventListener('DOMContentLoaded', function() {
    var menu = document.querySelector('.menuIndex');
    var toggleButton = document.getElementById('toggleMenu');

    toggleButton.addEventListener('click', function() {
        menu.classList.toggle('collapsed');
        this.classList.toggle('collapsed');
        if (this.classList.contains('collapsed')) {
            this.style.transform = 'translateX(300px) rotate(180deg)';
            this.style.transition = 'transform 0.5s ease';
        } else {
            this.style.transform = 'translateX(0) rotate(0deg)';
            this.style.transition = 'transform 0.5s ease';
        }
    });
});
</script>
