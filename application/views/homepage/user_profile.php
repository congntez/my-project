<div class="a_admin_body">
	<div class="a_admin_content w_admin_content a_user_profile">
		<div class="row c_mar_top_40">
			<div class="a_user_profile_avatar center">
				<a href="#">
					<img src="<?php echo $path_image ?>avar1.png" alt="">
				</a>
			</div>
			<p class="a_user_profile_name center">
				<?php
				if(isset($this->session->user_id)) {
					echo($this->session->userdata('username'));
				}
				?>
			</p>
			<p class="a_user_profile_email center">
				<?php
				if(isset($this->session->user_id)) {
					echo $user_info->email;
				}
				?>
			</p>
		</div>
		<div class="row">
			<div class="col m2"></div>
			<div class="col m10">
				<div class="a_user_profile_info_title left">
					<i class="fa fa-info-circle" aria-hidden="true"></i>
					Thông tin tài khoản
					<a href="#" class="a_user_profile_edit_icon w_user_profile_edit_icon">
						<i class="material-icons tooltipped" data-tooltip="Chỉnh sửa" data-position="right">edit</i>
					</a>
				</div>
			</div>
		</div>
		<form action="" class="w_user_profile_form">
			<div class="row a_user_profile_field">
				<div class="col m3">
					<p class="a_user_profile_info_email right">
						Địa chỉ
					</p>
				</div>
				<div class="col m7">
					<div class="input-field a_user_profile_field_content">
						<input disabled type="text" class="ezimar-input"
						       name="custom_coverage" value="<?php
						if(isset($this->session->user_id)) {
							echo $user_info->address;
						}
						?>">
					</div>
				</div>
			</div>
			<div class="row a_user_profile_field">
				<div class="col m3">
					<p class="a_user_profile_info_email right">
						Số điện thoại:
					</p>
				</div>
				<div class="col m7">
					<div class="input-field a_user_profile_field_content">
						<input disabled type="text" class="ezimar-input"
						       name="name" value="0987663176">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col m10">
					<div class="right a_user_profile_save_btn w_user_profile_save_btn">
						<a class="waves-effect w_user_profile_close_btn btn btn-ezimar-outline ezimar-gray c_mar_right_5"
						   name="" value="">
							Hủy
						</a>
						<button class="waves-effect btn btn-ezimar-primary ezimar_green" type="submit"
						        name="action" value="savedraft">
							Lưu thông tin
						</button>
					</div>
				</div>
			</div>
		</form>
		<div class="row">
			<div class="col m2"></div>
			<div class="col m10">
				<div class="a_user_profile_info_title left">
					<i class="fa fa-key" aria-hidden="true"></i>
					Thay đổi mật khẩu
					<a href="#" class="a_user_profile_edit_icon w_user_profile_change_pass_icon">
						<i class="material-icons tooltipped" data-tooltip="Thay đổi"
						   data-position="right">edit</i>
					</a>
				</div>
			</div>
		</div>
		<div class="a_user_profile_change_pass w_user_profile_change_pass">
			<form action="" method="post" class="w_user_profile_change_pass_form">
				<div class="row a_user_profile_field">
					<div class="col m3">
						<p class="a_user_profile_info_email right">
							Mật khẩu hiện tại:
						</p>
					</div>
					<div class="col m7">
						<div class="input-field a_user_profile_field_changepass">
							<input id="" type="password" class="ezimar-input" name="password" value="">
							<span class="a_user_profile_eye_pass w_user_profile_eye_pass">
								<i class="fa fa-eye btn-show-hide" aria-hidden="true" title="Hiện mật khẩu"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="row a_user_profile_field">
					<div class="col m3">
						<p class="a_user_profile_info_email right">
							Mật khẩu mới:
						</p>
					</div>
					<div class="col m7">
						<div class="input-field a_user_profile_field_changepass">
							<input id="" type="password" class="ezimar-input" name="newpassword" value="">
							<span class="a_user_profile_eye_pass w_user_profile_eye_newpass">
								<i class="fa fa-eye btn-show-hide" aria-hidden="true" title="Hiện mật khẩu"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="row a_user_profile_field">
					<div class="col m3">
						<p class="a_user_profile_info_email right">
							Xác nhận mật khẩu:
						</p>
					</div>
					<div class="col m7">
						<div class="input-field a_user_profile_field_changepass">
							<input id="" type="password" class="ezimar-input" name="repassword" value="">
							<span class="a_user_profile_eye_pass w_user_profile_eye_repass">
								<i class="fa fa-eye btn-show-hide" aria-hidden="true" title="Hiện mật khẩu"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col m10">
						<div class="right a_user_profile_button">
							<a class="waves-effect btn w_user_profile_close_change_pass btn-ezimar-outline ezimar-gray c_mar_right_5"
							   name="" value="">
								Hủy
							</a>
							<button class="waves-effect btn btn-ezimar-primary ezimar_green" type="submit"
							        name="action" value="savedraft">
								Lưu thay đổi
							</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php echo $ft ?>