var Categories = (function (w, $, undefined) {

    function init () {
        dtInit();
        boxes();
        $('#left-panel li[data-nav="categories"]').addClass('active');
    }


    //Data Table
    function dtInit() {
        window.DT.create('#datatable', {
            resource: 'categories',
            columns: [
                'value|limit',
                'id|actions'
            ]
        });
    }
    //fin Data Table

    function boxes () {
        Box.small({title: 'Perfecto', content:'La categoría se cargó con éxito.'}).success().showIfHash('new');
        Box.small({title: 'Perfecto', content:'La categoría se editó con éxito.'}).success().showIfHash('edit');
    }

    return {
        init : function () {
            init();
        }
    }
})(window, jQuery, undefined);

$(document).ready(function () {
    Categories.init();
});
