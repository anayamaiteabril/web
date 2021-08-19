var Services = (function (w, $, undefined) {

    function init () {
        dtInit();
        listeners();
        boxes();
        $('#left-panel li[data-nav="services"]').addClass('active');
    }

    //Data Table
    function dtInit() {
        window.DT.create('#datatable', {
            resource: 'services',
            columns: [
                'icon|callback:(function(row){return \'<i class="\'+row.icon+\'">\'})(row)',
                'title|limit',
                'id|actions'
            ]
        });
    }
    //fin Data Table

    //listeners
    function listeners () {
        $('.saveForm').on('click', function () {
            $('#form').submit();
        });
    }

    function boxes () {
        Box.small({title:'Perfecto', content:'El servicio se cargó con éxito.'}).success().showIfHash('new');
        Box.small({title:'Perfecto', content:'El servicio se editó con éxito.'}).success().showIfHash('edit');
    }

    return {
        init : function () {
            init();
        }
    }
})(window, jQuery, undefined);

$(document).ready(function () {
    Services.init();
});
