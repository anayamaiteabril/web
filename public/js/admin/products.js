var Products = (function (w, $, undefined) {

    function init () {
        dtInit();
        listeners();
        boxes();
        $('#left-panel li[data-nav="products"]').addClass('active');
    }

    //Data Table
    function dtInit() {
        window.DT.create('#datatable', {
            resource: 'products',
            columns: [
                'thumb|image',
                'name|limit',
                'code',
                'expiration',
                'is_visible|stateSwitcher',
                'category|limit',
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
        Box.small({title:'Perfecto', content:'El producto se cargó con éxito.'}).success().showIfHash('new');
        Box.small({title:'Perfecto', content:'El producto se editó con éxito.'}).success().showIfHash('edit');
    }

    return {
        init : function () {
            init();
        }
    }
})(window, jQuery, undefined);

$(document).ready(function () {
    Products.init();
});
