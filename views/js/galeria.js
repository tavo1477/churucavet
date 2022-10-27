/*=============================================
GALERÍA
=============================================*/

$(function () {
    $('.filter').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
        let valor = $(this).attr('data-nombre');
        if (valor == 'todos') {
            $('.cont-images').show('1200');
        } else {
            $('.cont-images').not('.' + valor).hide('1200');
            $('.cont-images').filter('.' + valor).show('1200');
        }
    });    
});


