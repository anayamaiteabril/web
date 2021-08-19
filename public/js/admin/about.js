var About = (function (w, $, undefined) {

    function init () {
		$('.saveForm').on('click', function () {
		  $('#form').submit();
		});
        $('#left-panel li[data-nav="abouts"]').addClass('active');
        ajaxImagesUploader.create({
            elements: $('.imagenUploader'),
            uploadController: '/admin/images/upload',
            deleteController: 'php/erasers/afiche.eraser.php',
            resource: 'abouts',
            imgDropzone: 'img/dropzone-design.gif'
        });
    }

    return {
        init : function () {
            init();
        }
    }
})(window, jQuery, undefined);

$(document).ready(function () {
    About.init();
});