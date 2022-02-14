// Window.onLoad = loadImage();
var current_page = 1;
$(document).ready(function () { loadProducts(current_page) });
$(document).on('click', '#load_more', loadMore);


function loadProducts(current_page) {
    $.ajax({
        url: '/products/getProducts',
        data: {
            page: current_page
        },
        type: 'get',
        dataType: 'json',
        success: function (data) {
            console.log(data);
            loopData(data);
            loadImage();
            // current_page = data.current_page
            // console.log(current_page);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    })
}

function loopData(data) {
    // $('.productspage-container').html("");
    var myData = $('.productspage-container').html();
    for (i = 0; i < data.data.length; i++) {
        myData += `<div class="row products-row">` +
            `<div class="col m6 s12">` +
            `<div class="card z-depth-0">` +
            `<img class="z-depth-1 right asyncImage" src="/images/Products/Resized250/${data.data[i].image}" data-src="/images/Products/Resized600/${data.data[i].image}" alt="">` +
            `</div>` +
            `</div>` +
            `<div class="col m6 s12">` +
            `<div class="product-card">` +
            `<div class="product-info center-vertically-left">` +
            `<p class="product-name">${data.data[i].name}</p>` +
            `<p class="product-desc">${data.data[i].description}</p>` +
            `<a href="/buynow" class="waves-effect mx0 my2 waves-light btn btn-1">BUY NOW</a>` +
            `</div>` +
            `</div>` +
            `</div>` +
            `</div>`;
    }
    if (data.current_page != data.last_page) {
        myData += `<a href="javascript:void(0)" data-last-page="${data.last_page}" class="waves-effect waves-light btn btn-1" id="load_more">Load more</a>`;
    }

    $('.productspage-container').html(myData);
    
}
function loadMore() {
    var last_page = $(this).attr('data-last-page');
    $(this).remove();
    if (current_page < last_page) {
        current_page += 1
        loadProducts(current_page);
    }

}