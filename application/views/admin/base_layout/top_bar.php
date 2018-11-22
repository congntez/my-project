<script type="text/javascript">
	try {
		ace.settings.check('navbar', 'fixed')
	} catch (e) {
	}
</script>

<div class="navbar-container" id="navbar-container">
	<!-- #section:basics/sidebar.mobile.toggle -->
	<p style="color: #fff; font-size: 14px; margin: 0!important; position: absolute; line-height: 45px; left: 20%">Thời trang Cobee - Thời trang phụ nữ giá rẻ</p>

	<!-- /section:basics/sidebar.mobile.toggle -->
	<div class="navbar-header pull-left">
		<!-- #section:basics/navbar.layout.brand -->
		<a href="#" class="navbar-brand">
			<img src="<?php echo base_url('assets/images/homepage/logo.png') ?>" alt="">
		</a>

		<!-- /section:basics/navbar.layout.brand -->

		<!-- #section:basics/navbar.toggle -->

		<!-- /section:basics/navbar.toggle -->
	</div>

	<!-- #section:basics/navbar.dropdown -->
	<div class="navbar-buttons navbar-header pull-right" role="navigation">
		<ul class="nav ace-nav">
			<!-- #section:basics/navbar.user_menu -->
			<li class="light-blue">
				<a data-toggle="dropdown" href="#" class="dropdown-toggle">
					<i class="fa fa-user fa-2x nav-user-photo" aria-hidden="true"></i>
					<span class="user-info">
                        <small>Xin chào,</small>
						<?php
						if(isset($this->session->user_id)) {
							echo($this->session->userdata('username'));
						}
						?>
                    </span>
					<i class="ace-icon fa fa-caret-down"></i>
				</a>

				<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
<!--					<li>-->
<!--						<a href="#">-->
<!--							<i class="ace-icon fa fa-cog"></i>-->
<!--							Settings-->
<!--						</a>-->
<!--					</li>-->
<!---->
<!--					<li>-->
<!--						<a href="profile.html">-->
<!--							<i class="ace-icon fa fa-user"></i>-->
<!--							Profile-->
<!--						</a>-->
<!--					</li>-->
<!---->
<!--					<li class="divider"></li>-->

					<li>
						<a href="<?php echo base_url('login/logout')?>">
							<i class="ace-icon fa fa-power-off"></i>
							Logout
						</a>
					</li>
				</ul>
			</li>

			<!-- /section:basics/navbar.user_menu -->
		</ul>
	</div>

	<!-- /section:basics/navbar.dropdown -->
</div><!-- /.navbar-container -->