var Brands = (function (w, $, undefined) {

    function init () {
        boxes();
        $('#left-panel li[data-nav="brands"]').addClass('active');
        $('.saveForm').on('click', function () {
            $('#form').submit();
        });
    }

    function boxes () {
        Box.small({title: 'Perfecto', content:'Las marcas se editaron con éxito.'}).success().showIfHash('edit');
    }

    return {
        init : function () {
            init();
        }
    }
})(window, jQuery, undefined);

$(document).ready(function () {
    Brands.init();
});