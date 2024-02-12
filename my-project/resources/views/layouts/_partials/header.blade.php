<header>
    <nav>

        <ul>
            <li><a href=" {{ route('home') }}"> <img src="{{ asset('assets/img/logoBlanco.png') }}" id="logo"
                    alt=""></a></li>
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
</header>
