
            <div class="item">
                <img src="{{ $producto->imagen_url }}" class="foto">
                <div class="content">

                    
                    <table width="100%" cellspacing="0">
                        <tr>
                            <td>{{$producto->nombre}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Precio:</td>
                            <td>{{$producto->precio}}€</td>
                        </tr>
                        <tr>
                            <td>Unidades:</td>
                            <td>{{$producto->unidades}}</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="descripcion">{{$producto ->descripcion}}</td>
                        </tr>
                    </table>
                </div>
            </div>

