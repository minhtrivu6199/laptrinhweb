function changeProductAmount(productId, amount) {
    $.post( '/api/invoice.php', {
        'action': 'change-amount',
        'productId': productId,
        'amount': amount,
    }, function( data ) {
        location.reload();
    });
}

function removeFromCart(productId) {
    $.post( '/api/invoice.php', {
        'action': 'delete-product',
        'productId': productId,
    }, function( data ) {
        location.reload();
    });
}

$(function() {
    $('.amount-input').change(function() {
        changeProductAmount($(this).attr('productId'), $(this).val());
    });
    $('.btn-delete').click(function() {
        removeFromCart($(this).attr('productId'));
    });
});