<div class="a_loginreg_title">
	<h3>
		Chào bạn, cảm ơn bạn đã hợp tác với Việt Travel
		Hãy kể cho chúng tôi nghe về địa phương của bạn có những thế mạnh gì để làm du lịch!
	</h3>
</div>
<div class="col m10 offset-m1 s10 offset-s1">
	<form action="<?php echo base_url('login_first/form_confirm/data_submitted')?>" method="post"
	      class="a_loginreg_form w_confirm_form"
	      id="i_reg_form">
		<div class="row">
			<div class="input-field col s12">
				<textarea id="textarea1" class="materialize-textarea validate" name="textarea">
					<?php echo $description ?>
				</textarea>
				<label for="">Mô tả địa phương</label>
			</div>
		</div>
		<div class="row center">
			<div class="" id="i_loginreg_regbtn">
				<button class="btn btn-ezimar-primary waves-effect waves-amber-bpublish">
					Gửi
				</button>
			</div>
		</div>
	</form>
</div>
