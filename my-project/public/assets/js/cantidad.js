$(document).ready(function () {
    // Función para aumentar y disminuir la cantidad
    $('.quantity-right-plus').click(function (e) {
        // Aumentar la cantidad
        e.preventDefault();
        var quantityInput = $(this).closest('.product-item').find('.input-number');
        var quantity = parseInt(quantityInput.val());
        quantityInput.val(quantity + 1);
    });

    $('.quantity-left-minus').click(function (e) {
        // Disminuir la cantidad
        e.preventDefault();
        var quantityInput = $(this).closest('.product-item').find('.input-number');
        var quantity = parseInt(quantityInput.val());
        if (quantity > 1) {
            quantityInput.val(quantity - 1);
        }
    });
});
