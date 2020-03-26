"use strict";

// Class Definition
var KTLoginPage = function () {

	var showErrorMsg = function(form, type, msg) {
        var alert = $('<div class="alert alert-bold alert-solid-' + type + ' alert-dismissible" role="alert">\
			<div class="alert-text">'+msg+'</div>\
			<div class="alert-close">\
                <i class="flaticon2-cross kt-icon-sm" data-dismiss="alert"></i>\
            </div>\
		</div>');

        form.find('.alert').remove();
        alert.prependTo(form);
        KTUtil.animateClass(alert[0], 'fadeIn animated');
    }

	// Private Functions
	var handleLoginFormSubmit = function () {
		$('#kt_login_submit').click(function (e) {
			e.preventDefault();
			var btn = $(this);
            var form = $('#kt_login_form');
            var nik = $('#nik').val();
            var _token = $('#_token').val();
            var pass = $('#pwldap').val();

			form.validate({
				rules: {
					nik: {
						required: true
                    },
				}
			});

			if (!form.valid()) {
				return;
			}

			KTApp.progress(btn[0]);

			setTimeout(function () {
				KTApp.unprogress(btn[0]);
			}, 2000);

			// ajax form submit:  http://jquery.malsup.com/form/
			form.ajaxSubmit({
                type: 'post',
                url: '/login',
                data: {
                    '_token':_token,
                    'nik':nik,
                    'pwldap': pass,
                },
				success: function (message) {
                   setTimeout(function () {
                       KTApp.unprogress(btn[0]);
                       showErrorMsg(form, 'success', message.message);
                       window.location.href = "/";
                    }, 800);

                },
                error: function(message){
                    setTimeout(function () {
                        KTApp.unprogress(btn[0]);
                        showErrorMsg(form, 'danger', message.responseJSON.message);
                    }, 2000);
                },
			});
		});
	}

	// Public Functions
	return {
		// public functions
		init: function () {
			handleLoginFormSubmit();
		}
	};
}();

// Class Initialization
jQuery(document).ready(function () {
	KTLoginPage.init();
});
