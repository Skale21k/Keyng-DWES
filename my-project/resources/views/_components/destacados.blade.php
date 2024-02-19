<div class="item">
    <img src="{{ $producto->imagen_url }}" class="foto">
    <div class="content">


        <table width="100%" cellspacing="0">
            <tr>
                <td colspan="2">{{$producto->nombre}}</td>

            </tr>
            <tr>
                <td>Precio:</td>
                <td>{{$producto->precio}}€</td>
            </tr>
            <tr>
                <td>Cantidad:</td>
                <td>
                    <div class="quantity-selector">
                    <select name="cantidad" id="cantidad">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                    </div>
                </td>
                <td id="#cantidad"> </td>
            </tr>
            <tr>

                <td colspan="2" class="descripcion">
                <a href="#" class="button">Añadir al carro<iconify-icon icon="uil:shopping-cart"></a></td>
            </tr>
        </table>
    </div>
</div>
