<header>
    <div class="container-nav">
        <nav>
            <ul>
                <div class="logo">
                    <li><a href=" {{ route('home') }}"> <img src="{{ Storage::url('img/logoBlancoLetras.png') }}"
                                id="logo" alt=""></a></li>
                </div>
            </ul>
            <ul class="utilidad">
                <li>
                    <div class="formBusqueda">
                        <form action="{{ route('productos.filtro') }}" method="POST" id="buscarform">
                            @csrf
                            <input type="text" name="nombre" placeholder="Buscar" />
                        </form>
                    </div>
                </li>
                <li><a href="{{route('carrito.checkout')}}"><img src="{{ Storage::url('img/carrito.png') }}" alt=""><span class="badge bg-danger">{{\Cart::count()}}</span></a></li>
                <li><a href=" {{ route('usuarios.login') }}"> <img src="{{ Storage::url('img/usuario.png') }}"
                            alt=""></a></li>
            </ul>
        </nav>
    </div>
    <div class="navegacion">
        <nav>
        <ul>
            <li><a href="{{route('productos.index')}}">Productos</a></li>
            @admin
            <li>Administración</li>
            @endadmin
            <li id="sobreNosotos">Sobre Nosotros</li>
        </ul>
    </nav>
    </div>
</header>
