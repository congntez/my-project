<div class="a_loginreg_title">
	<h3>
		Đăng ký để đặt hàng và nhận ưu đãi từ Cobee Shop!
	</h3>
</div>
<div class="col m10 offset-m1 s10 offset-s1">
	<form action="<?php echo base_url('register/data_submitted') ?>" method="post"
	      class="a_loginreg_form w_loginreg_form"
	      id="i_reg_form">
		<div class="row">
			<div class="input-field col s6">
				<input id="i_reg_username" type="text" name="username" value="<?php echo $get_user ?>">
				<label for="i_reg_username">Tên tài khoản*</label>
			</div>
			<div class="input-field col s6">
				<input id="i_reg_email" type="email" name="email">
				<div class="error"></div>
				<label for="i_reg_email">Email*</label>
			</div>
			<div class="input-field col s6">
				<input id="i_reg_pass" type="password" name="password">
				<label for="i_reg_pass">Mật khẩu</label>
				<span class="a_loginreg_eye_pass w_reg_eye_pass">
						<i class="fa fa-eye btn-show-hide" aria-hidden="true" title="Hiện mật khẩu"></i>
					</span>
			</div>
			<div class="input-field col s6">
				<input id="i_reg_repass" type="password" name="repassword">
				<label for="i_reg_repass">Nhập lại mật khẩu</label>
				<span class="a_loginreg_eye_pass w_reg_eye_repass">
						<i class="fa fa-eye btn-show-hide" aria-hidden="true" title="Hiện mật khẩu"></i>
					</span>
			</div>
			<div class="col s12">
				<p class="a_loginreg_err w_loginreg_err"></p>
			</div>
		</div>
		<div class="row">
			<div class="col m7 a_loginreg_question">
				<a href="<?php echo base_url('login') ?>">
					Bạn đã có tài khoản?
				</a>
			</div>
			<div class="col m5 a_loginreg_regbtn" id="i_loginreg_regbtn">
				<button class="btn btn-ezimar-primary waves-effect waves-amber-bpublish">
					Đăng ký
				</button>
			</div>
		</div>
	</form>
</div>
