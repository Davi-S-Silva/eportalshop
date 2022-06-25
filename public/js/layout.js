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
    $('.acoes_ofertas_home').hide();
    $('.ofertas_home').hover(function(){
       $(this).find('.acoes_ofertas_home').toggle();
    })
});