$(document).ready(function () {

	$('.materialboxed').materialbox();

	$('.slider').slider();

	$(".owl-carousel").owlCarousel();

	$(".button-collapse").sideNav();

	$(".dropdown-button").dropdown();

	$('select').material_select();

	$('.modal').modal();
	//new WOW().init();

	$('.w_website_form').validate({
		rules: {
			name: {
				required: true
			},
			email: {
				required: true,
				email: true
			},
			phone: {
				required: true,
				customvalidation: true,
				minlength: 10,
				maxlength: 15
			}
		},
		//For custom messages
		messages: {
			name: {
				required: "* Bạn chưa nhập Họ và tên *"
			},
			email: {
				required: "* Bạn chưa nhập Email *",
				email: "* Email không hợp lệ *"
			},
			phone: {
				required: "* Bạn chưa nhập Số điện thoại*",
				minlength: "* Số điện thoại không hợp lệ *",
				maxlength: "* Số điện thoại không hợp lệ *"
			}
		},
		errorElement: 'div',
		showErrors: function () {
			this.defaultShowErrors();
			$('input:not([type]).error, input[type=text]:not(.browser-default).error, input[type=password]:not(.browser-default).error, input[type=email]:not(.browser-default).error, input[type=url]:not(.browser-default).error, input[type=time]:not(.browser-default).error, input[type=date]:not(.browser-default).error, input[type=datetime]:not(.browser-default).error, input[type=datetime-local]:not(.browser-default).error, input[type=tel]:not(.browser-default).error, input[type=number]:not(.browser-default).error, input[type=search]:not(.browser-default).error, textarea.materialize-textarea.error').parent().find('label,i').css('color', '#f44336');
			$('input:not([type]):focus:not([readonly]).error, input[type=text]:not(.browser-default).error:focus:not([readonly]), input[type=password]:not(.browser-default).error:focus:not([readonly]), input[type=email]:not(.browser-default).error:focus:not([readonly]), input[type=url]:not(.browser-default).error:focus:not([readonly]), input[type=time]:not(.browser-default).error:focus:not([readonly]), input[type=date]:not(.browser-default).error:focus:not([readonly]), input[type=datetime]:not(.browser-default).error:focus:not([readonly]), input[type=datetime-local]:not(.browser-default).error:focus:not([readonly]), input[type=tel]:not(.browser-default).error:focus:not([readonly]), input[type=number]:not(.browser-default).error:focus:not([readonly]), input[type=search]:not(.browser-default).error:focus:not([readonly]), textarea.materialize-textarea.error:focus:not([readonly])').parent().find('label,i').addClass('label_color');
			$('input.invalid:not([type]), input.invalid:not([type]):focus, input[type=text].invalid:not(.browser-default), input[type=text].invalid:not(.browser-default):focus, input[type=password].invalid:not(.browser-default), input[type=password].invalid:not(.browser-default):focus, input[type=email].invalid:not(.browser-default), input[type=email].invalid:not(.browser-default):focus, input[type=url].invalid:not(.browser-default), input[type=url].invalid:not(.browser-default):focus, input[type=time].invalid:not(.browser-default), input[type=time].invalid:not(.browser-default):focus, input[type=date].invalid:not(.browser-default), input[type=date].invalid:not(.browser-default):focus, input[type=datetime].invalid:not(.browser-default), input[type=datetime].invalid:not(.browser-default):focus, input[type=datetime-local].invalid:not(.browser-default), input[type=datetime-local].invalid:not(.browser-default):focus, input[type=tel].invalid:not(.browser-default), input[type=tel].invalid:not(.browser-default):focus, input[type=number].invalid:not(.browser-default), input[type=number].invalid:not(.browser-default):focus, input[type=search].invalid:not(.browser-default), input[type=search].invalid:not(.browser-default):focus, textarea.materialize-textarea.invalid, textarea.materialize-textarea.invalid:focus, .select-wrapper.invalid>input.select-dropdown').addClass('border_none')
		}
	});

	$.validator.addMethod("customvalidation",
		function (value, element) {
			return /^[0-9\d=#$%@_-]+$/.test(value);
		},
		"* Số điện thoại chỉ chứa các ký tự số *"
	);

	$('.w_website_form .input-field input').keyup(function (event) {
		$(this).parent().find('div').remove();
		$(this).parent().find('label,i').css('color', '#ff6f00');
		$(this).removeClass('error');
	});

	$('.w_website_form .input-field input').keydown(function (event) {
		$(this).parent().find('div').remove();
		$(this).parent().find('label,i').css('color', '#ff6f00');
		$(this).removeClass('error');
	});

	$('.a_loginreg_nextbtn').on("click", function (event) {
		var user_input = $('.w_login_username').val();
		$('h3.a_loginreg_title_pass').html('Chào bạn, ' + user_input);
	});

	$('.w_login_eye_pass').on("click", function (event) {
		event.preventDefault();
		if ($("#i_login_pass").attr("type") == "password") {
			$('#i_login_pass').attr('type', 'text');
			$('.w_login_eye_pass i').removeClass('fa-eye').addClass('fa-eye-slash');
			$('.w_login_eye_pass i').attr('title', 'Ẩn mật khẩu');
		}
		else {
			$('#i_login_pass').attr('type', 'password');
			$('.w_login_eye_pass i').removeClass('fa-eye-slash').addClass('fa-eye');
			$('.w_login_eye_pass i').attr('title', 'Hiện mật khẩu');
		}
	});

	$('.w_reg_eye_pass').on("click", function (event) { //click vào hiện mật khẩu
		event.preventDefault();
		if ($("#i_reg_pass").attr("type") == "password") {
			$('#i_reg_pass').attr('type', 'text');
			$('.w_reg_eye_pass i').removeClass('fa-eye').addClass('fa-eye-slash');
			$('.w_reg_eye_pass i').attr('title', 'Ẩn mật khẩu');
		}
		else {
			$('#i_reg_pass').attr('type', 'password');
			$('.w_reg_eye_pass i').removeClass('fa-eye-slash').addClass('fa-eye');
			$('.w_reg_eye_pass i').attr('title', 'Hiện mật khẩu');
		}
	});

	$('.w_reg_eye_repass').on("click", function (event) { //click vào hiện nhập lại mật khẩu
		event.preventDefault();
		if ($("#i_reg_repass").attr("type") == "password") {
			$('#i_reg_repass').attr('type', 'text');
			$('.w_reg_eye_repass i').removeClass('fa-eye').addClass('fa-eye-slash');
			$('.w_reg_eye_repass i').attr('title', 'Ẩn mật khẩu');
		}
		else {
			$('#i_reg_repass').attr('type', 'password');
			$('.w_reg_eye_repass i').removeClass('fa-eye-slash').addClass('fa-eye');
			$('.w_reg_eye_repass i').attr('title', 'Hiện mật khẩu');
		}
	});

	$(".w_confirm_form").validate({
		rules: {
			textarea: {
				required: true,
				minlength: 3
			}
		},
		//For custom messages
		messages: {
			textarea: {
				required: "* Chưa nhập tên tài khoản! *",
				minlength: "* Tên tài khoản phải có ít nhất 3 ký tự! *"
			}
		},
		errorElement: 'div'
	});

	$(".w_loginreg_form").validate({
		rules: {
			username: {
				required: true,
				minlength: 3,
				customvalidation: true
			},
			email: {
				required: true,
				email: true
			},
			password: {
				required: true,
				minlength: 5
			},
			repassword: {
				required: true,
				minlength: 5,
				equalTo: "#i_reg_pass"
			},
			phone: {
				required: true,
				minlength: 10,
				maxlength: 11
			}
		},
		//For custom messages
		messages: {
			username: {
				required: "* Chưa nhập tên tài khoản! *",
				minlength: "* Tên tài khoản phải có ít nhất 3 ký tự! *",
			},
			email: {
				required: "* Chưa nhập Email! *",
				email: "* Email không hợp lệ! *"
			},
			password: {
				required: "* Chưa nhập mật khẩu! *",
				minlength: "* Mật khẩu phải có ít nhất 5 ký tự! *"
			},
			repassword: {
				required: "* Chưa xác nhận mật khẩu! *",
				equalTo: "* Mật khẩu không khớp! *"
			},
			phone: {
				required: "* Chưa nhập số điện thoại! *",
				minlength: "* Số điện thoại không đúng định dạng! *",
				maxlength: "* Số điện thoại không đúng định dạng! *"
			}
		},
		errorElement: 'div'
	});

	$.validator.addMethod("customvalidation",
		function (value, element) {
			return /^[A-Za-z\d=#$%@_-]+$/.test(value);
		},
		"* Tên tài khoản không chứa ký tự đặc biệt hoặc khoảng trắng! *"
	);

	$(document).on('keyup', 'input[name="phone"]', function () {
		$(this).val(function (index, value) {
			return value
			.replace(/[^0-9\s\+()]*/g, "");
		});
	});

	$('.w_loginreg_form .input-field input').keyup(function (event) {
		$('.a_loginreg_add_acc a').html('');
		$(this).parent().find('div').remove();
		$(this).removeClass('error');
	});

	$('.w_loginreg_form .input-field input').keydown(function (event) {
		$(this).parent().find('div').remove();
		$(this).removeClass('error');
		$('.a_loginreg_add_acc a').html('');
	});

	$('#i_login_form_user').ajaxForm({
		dataType: 'json',
		success: function (data) {
			var user_input = $('.w_login_username').val();
			if (data['status'] === "error_name") {
				$('#i_loginreg_form .input-field #i_login_username').focus();
				$('#i_login_username').addClass('error');
				$('#i_login_username').after('<div id="i_login_username-error" class="error">' + data.message + '</div>');
				$('.a_loginreg_add_acc a').html('Bạn muốn tạo tài khoản "' + user_input + '"?');
				$('.a_loginreg_add_acc a').attr('href', $('.a_loginreg_add_acc a').attr('href') + '?newname=' + user_input);
			}

			if (data['status'] === "success_name") {
				$('.a_login_user').addClass('hide');
				$('.a_login_pass').removeClass('hide');
			}
		}
	});

	$('#i_login_form_pass').ajaxForm({
		dataType: 'json',
		success: function (data) {
			if (data['status'] === "error_pass") {
				$('#i_login_form_pass .input-field #i_login_pass').focus();
				$('#i_login_pass').addClass('error');
				$('#i_login_pass').after('<div id="i_login_pass-error" class="error">' + data.message + '</div>');
			}

			if (data['status'] === "success_pass") {
				alert("Bạn đã đăng nhập thành công");
				window.location = "http://localhost:8080/dean/public";
			}
		}
	});

	$(window).scroll(function (e) {
		e.preventDefault();
		if ($(this).scrollTop() > 100) {
			$('.on_top').fadeIn();
		}
		else {
			$('.on_top').fadeOut();
		}
	});

	$('.carousel.carousel-slider').carousel({fullWidth: true});

	$(document).on('click', '.on_top', function (e) {
		e.preventDefault();

		$("html, body").animate({
			scrollTop: 0
		}, 600, "easeInOutExpo");

		return false;
	});

	$('.carousel.carousel-slider').carousel({fullWidth: true});

	setInterval(function () {
		$('.carousel').carousel('next', 1);
	}, 5000);

	$('.materialboxed').materialbox();

	$('.a_home_book_tour_btn a').on("click", function (event) {
		console.log('ádsdsa');
		/* Act on the event */
		event.preventDefault();
		$('html, body').animate({scrollTop: 1000.0397338867188}, 1400, "easeInOutExpo");
	});

	$('.w_intro_btn a').on("click", function (event) {
		/* Act on the event */
		event.preventDefault();
		$('html, body').animate({scrollTop: 630.0397338867188}, 1400, "easeInOutExpo");
	});
	$('.w_btn_contact').on("click", function (event) {
		/* Act on the event */
		event.preventDefault();
		$('html, body').animate({scrollTop: 4630.0397338867188}, 700, "easeInOutExpo");
	});

	$('.w_place_btn').on("click", function (event) {
		/* Act on the event */
		event.preventDefault();
		$('html, body').animate({scrollTop: 630.0397338867188}, 700, "easeInOutExpo");
	});


	$(document).on('click', '.btn-login', function () {
		var url = $(this).attr('data-ajax-url');
		var userName = $('#i_login_username').val();
		var password = $('#i_login_pass').val();
		$.ajax({
			url: url,
			type: "POST",
			data: {
				username: userName,
				password: password
			},
			dataType: "json",
			success: function (dataAll) {
				if (dataAll.state == '0') {
					console.log('aaa');
					notify(dataAll.msg, "alert-danger");
					$('.jGrowl-notification').removeClass('alert-success');
				}
				else if (dataAll.state == '1') {
					notify(dataAll.msg, "alert-success");
					setTimeout(function () {
						console.log(dataAll);
						window.location = dataAll.redirect_url;
					}, 2000);
				}
			},
			error: function (a, b, c) {

			},
			complete: function (jqXHR, textStatus) {
				hide_loading();
			}
		});
	});

	$(document).on('click', '.btn_order', function () {
		var url = $(this).attr('data-ajax-url'),
			countValue = $('#i_count_product').val(),
			name = $('#i_cart_name').val(),
			address = $('#i_cart_address').val(),
			phone = $('#i_cart_phone').val(),
			size = $('#i_cart_size').val();

		$.ajax({
			url: url,
			type: "POST",
			data: {
				count: countValue,
				name: name,
				address: address,
				phone: phone,
				size: size
			},
			dataType: "json",
			success: function (dataAll) {
				if (dataAll.state == '0') {
					notify(dataAll.msg, "alert-danger");
					//$('.jGrowl-notification').removeClass('.alert-success');
				}
				else {
					notify(dataAll.msg, "alert-success");
					setTimeout(function () {
						window.location = dataAll.redirect_url;
					}, 2000);
				}
			},
			error: function (a, b, c) {

			},
			complete: function (jqXHR, textStatus) {
				hide_loading();
			}
		});
	});


	$('.w_btn_count_plus').on("click", function (event) {
		event.preventDefault();
		$('.w_btn_count_minus').removeClass('disabled');
		var a = parseInt($('.w_cout_input').val()),
			b = a + 1;
		$('.w_cout_input').val(b);
	});

	$('.w_btn_count_minus').on("click", function (event) {
		event.preventDefault();
		var a = parseInt($('.w_cout_input').val()),
			b = a - 1,
			minValue = 1;
		if (a <= minValue) {
			$('.w_cout_input').val(minValue);
			$('.w_btn_count_minus').addClass('disabled');
		}
		else {
			$('.w_cout_input').val(b);
		}
	})

});


function notify(msg, type_msg) {
	console.log($.jGrowl);
	$.jGrowl("<i class='icon16 i-checkmark-3'></i>" + msg, {
		group: type_msg,
		position: 'top-right',
		sticky: false,
		closeTemplate: '<i class="fa fa-times" aria-hidden="true"></i>',
		animateOpen: {
			width: 'show',
			height: 'show'
		}
	});
}

$(document).ready(function () {
	$('select').material_select();
});