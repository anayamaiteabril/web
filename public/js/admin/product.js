var Product = (function (w, $, undefined) {

    var optionsDatepickers = {
        dateFormat: 'dd-mm-yy',
        dayNamesMin: ['do', 'lu', 'ma', 'mi', 'ju', 'vi', 'sÃ¡'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'MiÃ©rcoles', 'Jueves', 'Viernes', 'SÃ¡bado'],
        monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
        monthNamesShort:['Ene','Feb','Mar','Abril','Mayo','Jun','Jul','Ago','Sept','Oct','Nov','Dic'],
        prevText : '<i class="fa fa-chevron-left"></i>',
        nextText : '<i class="fa fa-chevron-right"></i>'
    }

    function init () {
        $('#left-panel li[data-nav="products"]').addClass('active');
        listeners();
        fechaPicker();
    }

    //listeners
    function listeners () {
        $('.saveForm').on('click', function () {
            $('#form').submit();
        });
    }

    function fechaPicker () {
        $('input[name="expiration"]').datepicker(optionsDatepickers);
    }


    return {
        init : function () {
            init();
        }
    }
})(window, jQuery, undefined);

$(document).ready(function () {
    Product.init();
});
