$(document).on('click', '#save', saveMetaTags);

function saveMetaTags() {
    var row = $(this).closest('li');
    var id = $(this).attr('data-id');
    var title = row.find('.title').val();
    var keywords = row.find('.keywords').val();
    var meta_description = row.find('.meta_description').val();


    $.ajax({
        url: '../admin/settings/meta_tags',
        data: {
            id: id,
            page: title,
            meta_keywords: keywords,
            meta_description: meta_description,
        },
        dataType: 'json',
        method: 'put'
    }).done(function (data) {

        if (data.status == '1') {
            M.toast({ html: 'Updated Succesfully' })
            location.reload();
        }
    }).fail(function () {
        // self.setContent('Something went wrong.');
    });;

    // $.confirm({
    //     boxWidth: '30%',
    //     useBootstrap: false,
    //     title: '',
    //     // content: '',
    //     content: function () {
    //         // var self = this; 

    //         return $.ajax({
    //             url: '../admin/settings/meta_tags',
    //             data:{
    //                 id : id,
    //                 page : title,
    //                 meta_keywords : keywords,
    //                 meta_description : meta_description,
    //             },
    //             dataType: 'json',
    //             method: 'put'
    //         }).done(function (data) {
    //             // self.setContent('Description: ' + response.description);
    //             // self.setContentAppend('<br>Version: ' + response.version);
    //             // self.setTitle(response.name);
    //             if (data.status == '1') {
    //                 M.toast({ html: 'Updated Succesfully' })
    //                 location.reload();
    //             }
    //         }).fail(function(){
    //             // self.setContent('Something went wrong.');
    //         });
    //     }
    // });

    // alert(title);
}