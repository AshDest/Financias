(function ($) {
    "use strict";
       toastr.options = {
        "debug": false,
        "newestOnTop": false,
        "positionClass": "toast-bottom-right",
        "closeButton": true,
        "progressBar": true
    };
    $('.homerDemo1').on('click', function (event) {
        toastr.info('This one is christian BAHIZI');
    });
    $('.homerDemo2').on('click', function (event) {
        toastr.success('Success - This is a success notification');
    });
    $('.homerDemo3').on('click', function (event) {
        toastr.warning('Warning - This is a warning notification');
    });
    $('.homerDemo4').on('click', function (event) {
        toastr.error('Error - This is a error notification');
    });

})(jQuery);
