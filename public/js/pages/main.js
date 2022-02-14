var activeNav = 0;
var firstPath = window.location.pathname.split('/')[1];

$(document).ready(function () { 
        if(firstPath == ''){
            firstPath = 'home'
        }
        $('#nav'+ firstPath).addClass('border-bottom');
});


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function setActiveNavigation(){
    activeNav = activeNav + 1;
}

// function hidemessage() {
//     setTimeout(
//         function () {
//             if ($('.message').length == 1) {
//                 window.location = window.location.href;
//             }
//         }, 2000
//     )
// }


function loadImage() {
    'use strict';
    // Page is loaded
    const objects = document.getElementsByClassName('asyncImage');
    Array.from(objects).map((item) => {
        // Start loading image
        const img = new Image();
        img.src = item.dataset.src;
        // Once image is loaded replace the src of the HTML element
        img.onload = () => {
            item.classList.remove('asyncImage');
            return item.nodeName === 'IMG' ?
                item.src = item.dataset.src :
                item.style.backgroundImage = `url(${item.dataset.src})`;
        };
    });
};

// function subscribe() {
//     var input = $(this).closest('div').find('#email');
//     var email = input.val();
//     // alert(email);
//     $.ajax({
//         url: '../subscribe',
//         data: {
//             email: email,
//         },
//         type: 'post',
//         dataType: 'json',
//         success: function (data) {
//             console.log(data);
//             input.val(data.message);
//         },
//         error: function (jqXHR, textStatus, errorThrown) {
//             console.log(jqXHR, textStatus, errorThrown);
//         }
//     })
// }

// function sendContactForm() {
//     var form = $('.contact-form');
//     var name = form.find('#name').val();
//     var email = form.find('#email').val();
//     var message = form.find('#message').val();
//     var captcha = form.find('#captcha').val();

//     $.ajax({
//         url: '../send-email',
//         data: {
//             name: name,
//             email: email,
//             message: message,
//             captcha: captcha,
//         },
//         type: 'post',
//         dataType: 'json',
//         success: function (data) {
//             $('#sendEmail').html(data.message);
//             if (data.message == "message sent") {
//                 setTimeout(
//                     function () {
//                         // $('#sendEmail').html('SUBMIT');
//                         window.location = window.location.href;
//                     }, 1500
//                 )
//             }
//             else{
//                 setTimeout(
//                     function () {
//                         $('#sendEmail').html('SUBMIT');
//                     }, 1500
//                 )
//             }

//         },
//         error: function (jqXHR, textStatus, errorThrown) {
//             console.log(jqXHR, textStatus, errorThrown);
//         }
//     })
// }