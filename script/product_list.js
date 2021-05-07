function getProductList() {
    let xhttp = new XMLHttpRequest();
    xhttp.open('GET', '/api/product.php?action=list', true);
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    };
    xhttp.send();
}

function postDeleteProduct() {
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '/api/product.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    };
    xhttp.send('action=delete');
}

function getProductListJq() {
    $.get( "/api/product.php?action=list", function( data ) {
        let jsob = JSON.parse(data);
        console.log(jsob);
    });
}

function callApiSearch(searchText) {
    $.get( `/api/product.php?action=list&queryString=${searchText}`, function( data ) {
        let jsob = JSON.parse(data);
        //update UI
        refreshProductGrid(jsob);
    });
}

function refreshProductGrid(products) {
    $('#product-grid').empty();
    for (let product of products) {
        let images = product.images;
        let image;
        if (images.length > 0) {
            image = images[0];
        }
        let image2;
        if(images.length >1) {
            image2 = images[1];
        }


        $('#product-grid').append(`<div class='col-md-3 col-sm-6'>
        <div class='product-grid'>
            <div class='product-image'>
                <a href='#'>
                    <img class='pic-1' src='${image}'>
                    <img class='pic-2' src='${image2}'>
                </a>
                <a href='#' class='fa fa-search product-full-view'></a>
            </div>
            <div class='product-content'>
                <h3 class='title'><a href='#'>${product.name}</a></h3>
                <div class='price'>${product.price}</div>
                <a productId='${product.id}' class='add-to-cart' href=''>Thêm Vào Giỏ</a>
            </div>
        </div>
    </div>`);
    }
}

function postDeleteProductJq() {
    let formData = {
        action: 'delete',
    }

    $.post( "/api/product.php", formData, function( data ) {
        console.log(data);
    });
}

$(function(){
    $('input.search_input').keyup(function() {
        let searchText = $(this).val();
        callApiSearch(searchText);
    });
})

function showNotification(message, color) {
    $('#notificationContainer').append(
        `<div class="alert alert-${color} alert-dismissible fade show mt-4 mr-4" role="alert">
            ${message}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>`
    ); 
}

function addToCart(productId) {
    $.post( '/api/invoice.php', {
        'action': 'change-amount',
        'productId': productId,
        'amount': 1,
    }, function( data ) {
        showNotification('Thêm vào giỏ thành công!', 'success');
    });
}

$(function() {
    $('.add-to-cart').click(function(event) {
        event.preventDefault();
        addToCart($(this).attr('productId'));
    }) 
})
