<div class="a_login_user">
	<div class="a_loginreg_title">
		<h3>
			Chào mừng bạn đến với Cobee Shop!
		</h3>
	</div>
	<div class="col m10 offset-m1 s12">
<!--		<form action="" method="post"-->
<!--		      class="a_loginreg_form w_loginreg_form"-->
<!--		      id="i_login_form_user">-->
			<div class="row">
				<div class="input-field col s12">
					<input id="i_login_username" type="text" class="w_login_username" name="username">
					<label for="i_login_username">Tên tài khoản</label>
				</div>
				<div class="col s12">
					<p class="a_loginreg_err w_loginreg_err"></p>
				</div>
				<div class="input-field col s12">
					<input id="i_login_pass" type="password" name="password">
					<label for="i_login_pass">Mật khẩu</label>
					<span class="a_loginreg_eye_pass w_login_eye_pass">
						<i class="fa fa-eye btn-show-hide" aria-hidden="true" title="Hiện mật khẩu"></i>
					</span>
				</div>
				<div class="col s12">
					<p class="a_loginreg_err w_loginreg_err"></p>
				</div>
			</div>
			<div class="row">
				<div class="a_loginreg_add_acc center">
					<a href="<?php echo base_url('register') ?>"></a>
				</div>
			</div>
			<div class="row">
				<div class="col m7 a_loginreg_question">
					<a href="<?php echo base_url('register') ?>">
						Bạn chưa có tài khoản?
					</a>
				</div>
				<div class="col m5 a_loginreg_btn">
					<button class="btn btn-ezimar-primary waves-effect waves-amber-bpublish btn-login" data-ajax-url="<?php echo site_url('login/check_login')?>">
						Đăng nhập
					</button>
				</div>
			</div>
<!--		</form>-->
	</div>
</div>