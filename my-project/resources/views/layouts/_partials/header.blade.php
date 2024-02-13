<header>
    <div class="container-nav">
        <nav>
            <ul>
                <div class="logo">
                    <li><a href=" {{ route('home') }}"> <img src="{{ asset('assets/img/logoBlancoLetras.png') }}"
                                id="logo" alt=""></a></li>
                </div>
            </ul>

            <ul class="utilidad">
                <li>
                    <div class="formBusqueda">
                        <form action="{{ route('home') }}" method="GET" id="buscarform">
                            <input type="text" id="s" value="" placeholder="Buscar" />
                        </form>
                    </div>
                </li>
                <li><a href=""><img src="{{ asset('assets/img/carrito.png') }}" alt=""></a></li>
                <li><a href=" {{ route('usuarios.index') }}"> <img src="{{ asset('assets/img/usuario.png') }}"
                            alt=""></a></li>
            </ul>
        </nav>
    </div>
    <div class="navegacion">
        <nav>
        <ul>
            <li><a href="{{route('productos.index')}}">Productos</a></li>
            <li>Administración</li>
            <li id="sobreNosotos">Sobre Nosotros</li>
        </ul>
    </nav>
    </div>
</header>
