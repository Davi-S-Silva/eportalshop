// (function($){
//     $('.carousel').jcarouselAutoscroll({
//         autostart: true
//     });
//     alert('ola')
// })
$(document).ready(function(){
    $('.carousel').carousel({
        interval: 4000,
        ride:'carousel',
        wrap: true
    })
});