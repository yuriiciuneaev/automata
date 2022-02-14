
var modal = $('#updateSliderModal');

$(document).on('click', '#deleteSlider', deleteSlider);
$(document).on('click', '#updateSlider', updateSlider);


function updateSlider() {
    var tr = $(this).closest('tr');
    var id = tr.attr('data-id');
    var description = tr.attr('data-desc');
    var title = tr.find('.title').text();
    var button_text = tr.attr('data-button_text');
    var button_link = tr.attr('data-button_link');

    modal.find($('#title')).val(title);
    modal.find($('#description')).val(description);
    modal.find($('#button_link')).val(button_link);
    modal.find($('#button_text')).val(button_text);
    modal.find('#lbl_title').addClass('active');
    modal.find('#lbl_btn_text').addClass('active');
    modal.find('#lbl_btn_link').addClass('active');
    modal.find('#slider_id').val(id);
}

function deleteSlider() {
    var tr = $(this).closest('tr');
    var id = tr.attr('data-id');
    var filename = tr.find('.filename').text();

    $.confirm({
        boxWidth: '30%',
        useBootstrap: false,
        title: 'Delete Slider?',
        content: '',
        buttons: {

            cancel: function () {
            },
            confirm: function () {
                $.ajax({
                    url: '../admin/sliders/delete/',
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