function changEditStatus() {
	if ($('.a_user_profile_field_content input').prop("disabled") == true) {
		$('.a_user_profile_field_content input').attr('disabled', false);
	}
	else if ($('.a_user_profile_field_content input').prop("disabled") == false) {
		$('.a_user_profile_field_content input').prop("disabled", true);
	}
	$('.w_user_profile_save_btn').slideToggle(600, 'swing');
}

function closeEditForm() {
	$('.a_user_profile_field_content input').prop("disabled", true);
	$('.w_user_profile_form')[0].reset();
	$('.w_user_profile_save_btn').slideUp(600, 'swing');
}

function showPassUser(e) {
	e.preventDefault();

	if ($("#i_user_pass").attr("type") === "password") {
		$('#i_user_pass').attr('type', 'text');
		$('.w_user_profile_eye_pass i').removeClass('fa-eye').addClass('fa-eye-slash');
		$('.w_user_profile_eye_pass i').attr('title', 'Ẩn mật khẩu');
	}
	else {
		$('#i_user_pass').attr('type', 'password');
		$('.w_user_profile_eye_pass i').removeClass('fa-eye-slash').addClass('fa-eye');
		$('.w_user_profile_eye_pass i').attr('title', 'Hiện mật khẩu');
	}
}

function showNewPassUser(e) {
	e.preventDefault();

	if ($("#i_user_newpass").attr("type") === "password") {
		$('#i_user_newpass').attr('type', 'text');
		$('.w_user_profile_eye_newpass i').removeClass('fa-eye').addClass('fa-eye-slash');
		$('.w_user_profile_eye_newpass i').attr('title', 'Ẩn mật khẩu');
	}
	else {
		$('#i_user_newpass').attr('type', 'password');
		$('.w_user_profile_eye_newpass i').removeClass('fa-eye-slash').addClass('fa-eye');
		$('.w_user_profile_eye_newpass i').attr('title', 'Hiện mật khẩu');
	}
}

function showRePassUser(e) {
	e.preventDefault();

	if ($("#i_user_repass").attr("type") === "password") {
		$('#i_user_repass').attr('type', 'text');
		$('.w_reg_eye_repass i').removeClass('fa-eye').addClass('fa-eye-slash');
		$('.w_reg_eye_repass i').attr('title', 'Ẩn mật khẩu');
	}
	else {
		$('#i_user_repass').attr('type', 'password');
		$('.w_user_profile_eye_repass i').removeClass('fa-eye-slash').addClass('fa-eye');
		$('.w_user_profile_eye_repass i').attr('title', 'Hiện mật khẩu');
	}
}

function showChangePass(e) {
	e.preventDefault();
	$(".w_admin_content").animate({ scrollTop: $(document).height() }, 1000);
	$('.w_user_profile_change_pass').slideToggle(600, 'swing');
	setTimeout(function () {
		$('.w_admin_content').getNiceScroll().resize();
	}, 600);
}

function closeChangePass(e) {
	e.preventDefault();
	$('.a_user_profile_field_changepass input').val('');
	$('.w_user_profile_change_pass').slideUp(600, 'swing');
}