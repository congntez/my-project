$(document).ready(function () {

	$(document).on("click", "a[href='#']", function (e) {
		e.preventDefault();
	});

	$(document).on("click", ".w_user_profile_edit_icon", changEditStatus);
	$(document).on("click", ".w_user_profile_close_btn", closeEditForm);
	$(document).on("click", ".w_user_profile_close_change_pass", closeChangePass);
	$(document).on("click", ".w_user_profile_change_pass_icon", showChangePass);
	$(document).on('click', '.w_user_profile_eye_pass', showPassUser); //click vào hiện mật khẩu
	$(document).on('click', '.w_user_profile_eye_repass', showRePassUser); //click vào hiện mật khẩu
	$(document).on('click', '.w_user_profile_eye_newpass', showNewPassUser); //click vào hiện mật khẩu

	$('.w_user_profile_change_pass_form').validate({
		rules: {
			password: {
				required: true
			},
			newpassword: {
				required: true,
				customvalidation: true,
			},
			repassword: {
				required: true,
				equalTo: "#i_user_newpass"
			}
		},
		//For custom messages
		messages: {
			password: {
				required: "* Bạn chưa nhập mật khẩu hiện tại *"
			},
			newpassword: {
				required: "* Bạn chưa nhập mật khẩu mới *"
			},
			repassword: {
				required: "* Bạn chưa xác nhận mật khẩu *",
				equalTo: "* Mật khẩu không khớp *"
			}
		},
		errorElement: 'div',
		showErrors: function () {
			this.defaultShowErrors();
		}
	});

	$.validator.addMethod("customvalidation",
		function (value, element) {
			return /^[0-9+a-z\d=#$%@_-]+$/.test(value);
		},
		"* Mật khẩu chỉ chưa ký tự số và chữ thường *"
	);

});