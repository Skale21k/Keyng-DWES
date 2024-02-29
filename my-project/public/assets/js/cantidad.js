
$(document).ready(function () {
    $('.quantity-right-plus').click(function (e) {
        // Aumentar la cantidad
        e.preventDefault();
        var quantityInput = $(this).closest('.product-item').find('.input-number');
        var quantity = parseInt(quantityInput.val());
        var cantidadUnidades = $(this).data('unidades'); // Obtén las unidades del producto correcto
        if(quantity < cantidadUnidades){
            quantityInput.val(quantity + 1);
        }
    });

    $('.quantity-left-minus').click(function (e) {
        e.preventDefault();
        var quantityInput = $(this).closest('.product-item').find('.input-number');
        var quantity = parseInt(quantityInput.val());
        if (quantity > 1) {
            quantityInput.val(quantity - 1);
        }

    });
});
