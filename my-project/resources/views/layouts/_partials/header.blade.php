<header>
    <nav>

        <ul>
            <li><a href=" {{ route('home') }}"></a> <img src="{{ asset('assets/img/logoBlanco.png') }}" id="logo"
                    alt=""></li>
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
            <li><a href=" {{ route('usuarios.index') }}"></a> <img src="{{ asset('assets/img/usuario.png') }}"
                    alt=""></li>
        </ul>
    </nav>
</header>
