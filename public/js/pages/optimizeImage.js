
$(document).on('click', '#optimizeImage', optimizeImage);
function optimizeImage() {
    $.confirm({
        boxWidth: '30%',
        useBootstrap: false,
        title: 'Optimize Images?',
        content: '',
        buttons: {
            cancel: function () {
            },
            confirm: function () {
                $.alert({
                    title: '',
                    content: function () {
                        var self = this;
                        // self.setContent('Optimizing Images');
                        return $.ajax({
                            url: '../admin/Images/resize',
                            dataType: 'json',
                            method: 'get'
                        }).done(function (response) {
                            self.setContentAppend(`<h5>${response['message']}</h5>`);
                        }).fail(function () {
                            self.setContentAppend('<div>Opps, something went wrong!!!</div>');
                        })
                    },
                    contentLoaded: function (data, status, xhr) {
                    },
                    onContentReady: function () {

                    }
                });
            },
        }
    });
}