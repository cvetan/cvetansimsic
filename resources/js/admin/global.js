$(".nav.nav-tabs li:first").addClass("active");

$(".tab-content .tab-pane:first").addClass("in active");

!function ($) {
    "use strict";

    var SweetAlert = function () {
    };

    //examples
    SweetAlert.prototype.init = function () {
        $('.remove-trigger').click(function (e) {
            e.preventDefault();

            $('.remove-form').attr('action', $(this).data('action'));

            swal({
                title: CvetanSimsic.tr_are_you_sure,
                text: '',
                type: "error",
                showCancelButton: true,
                confirmButtonClass: 'btn-danger waves-effect waves-light confirm-remove-btn',
                confirmButtonText: CvetanSimsic.tr_yes_remove
            }, function(isConfirm) {
                if (isConfirm) {
                    $('.remove-form').trigger('submit');
                }
            });
        });
    },
        //init
        $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
}(window.jQuery),

    //initializing
    function ($) {
        "use strict";
        $.SweetAlert.init()
    }(window.jQuery);
