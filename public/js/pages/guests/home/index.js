Window.onLoad = loadImage();

$(document).ready(function () {
    $('.slider').slider({full_width: true, indicators: false});
});

$('i#prev').click(function() {
    $('.slider').slider('prev');
});

$('i#next').click(function() {
    $('.slider').slider('next');
});