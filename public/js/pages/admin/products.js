
var modal = $('#updateModal');

$(document).on('click', '#deleteProduct', deleteProduct);
$(document).on('click', '#updateProduct', updateProduct);


function updateProduct() {
    var tr = $(this).closest('tr');
    var id = tr.attr('data-id');
    var description = tr.attr('data-desc');
    var name = tr.find('.name').text();
    // var link = tr.find('.link').attr('data-link');

    modal.find($('#name')).val(name);
    modal.find($('#description')).val(description);
    // modal.find($('#link')).val(link);
    modal.find('#lbl_name').addClass('active');
    // modal.find('#lbl_link').addClass('active');
    modal.find('#product_id').val(id);

}

function deleteProduct() {
    var tr = $(this).closest('tr');
    var id = tr.attr('data-id');
    var filename = tr.find('.filename').text();

    $.confirm({
        boxWidth: '30%',
        useBootstrap: false,
        title: 'Delete Product?',
        content: '',
        buttons: {

            cancel: function () {
            },
            confirm: function () {
                $.ajax({
                    url: '../admin/products/delete/',
                    data: {
                        id: id,
                        filename: filename
                    },
                    type: 'delete',
                    dataType: 'json',
                    success: function (data) {
                        if (data.status == '1') {
                            M.toast({ html: 'Deleted Succesfully' })
                            location.reload();
                        }

                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                })
            },
        }
    });

}
