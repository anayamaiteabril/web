var Service = (function (w, $, undefined) {

    function init () {
		$('.saveForm').on('click', function () {
		  $('#form').submit();
		});
        $('#left-panel li[data-nav="services"]').addClass('active');
        $('.selectpicker').selectpicker({
            iconBase: 'fa',
            tickIcon: 'fa-check'
        });
    }

    return {
        init : function () {
            init();
        }
    }
})(window, jQuery, undefined);

$(document).ready(function () {
    Service.init();
});