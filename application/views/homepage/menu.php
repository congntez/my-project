<div class="a_menu_search">
	<div class="container">
		<div class="row">
			<div class="a_menu_search_title col m4">
				Cobee shop - Thời trang cao cấp giá rẻ
			</div>
			<div class="col m8 s12">
				<div class="a_menu_search_form">
					<a class="a_menu_cart" href="<?php echo base_url('cart') ?>">
						<i class="fa fa-shopping-cart prefix"></i>
						<span class="a_menu_search_form_text">
							&nbsp;Giỏ hàng
						</span>
						<span>
							<?php
							if (isset($count_cart)) {
								echo $count_cart;
							}
							?>
						</span>
					</a>
					<form action="#" class="k_form">
						<input id="i_search_input" type="text" placeholder="Tìm kiếm"
						       class="w_search_input browser-default"
						       name="search">
						<span data-ajax-url="<?php echo site_url('search') ?>"
						      class="k_form_btn_search waves-effect waves-light" type="submit">
							<i class="material-icons a_inline_block">search</i>
						</span>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="a_menu_layout">
	<div class="container">
		<div class="row">
			<div class="col m12 s12 center a_menu_humber">
				<a href="#" data-activates="slide-out" class="button-collapse hide-on-med-and-up"><i
							class="material-icons">a_menu</i></a>
			</div>
			<ul id="slide-out" class="side-nav">
				<li>
					<a href="<?php echo base_url('home') ?>">
						Trang chủ
					</a>
				</li>
				<li>
					<a href="https://www.facebook.com/doan.phuong.921025">
						Facebook
					</a>
				</li>
				<?php if(!empty($categories)) {
					foreach ($categories as $value) {
						?>
						<li class="a_logout_btn">
							<a href="<?php echo site_url('all_collection/categories/') . $value->id ?>">
								<?php echo $value->name?>
							</a>
						</li>
						<?php
					}
				} ?>
				<li>
					<a href="<?php echo base_url('contact') ?>">
						Liên hệ
					</a>
				</li>
				<?php
				if (isset($this->session->user_id)) { ?>
					<li>
						<a href="<?php echo site_url('login/logout') ?>">
							Đăng xuất
						</a>
					</li>
					<?php
				}
				else {
					?>
					<li>
						<a href="<?php echo $link_login ?>">
							Đăng nhập
						</a>
					</li>
					<li class="a_menu_register">
						<a href="<?php echo site_url('register') ?>">
							Đăng ký
						</a>
					</li>
					<?php
				}
				?>
			</ul>
			<div class="col m12">
				<nav class="a_menu_bg">
					<div class="nav-wrapper">
						<ul id="nav-mobile" class="left hide-on-med-and-down">
							<li>
								<a href="<?php echo base_url('home') ?>" alt="" class="responsive-img a_website_logo">
									<img src="<?php echo base_url('public/assets/images/homepage/') ?>logo.png" alt="">
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('home') ?>">
									Trang chủ
								</a>
							</li>
							<li>
								<a class="dropdown-button a_username" href="#" data-activates="dropdown1">
									Sản phẩm
									<i class="material-icons right">arrow_drop_down</i>
								</a>
								<ul id='dropdown1' class='dropdown-content'>
									<?php if(!empty($categories)) {
										foreach ($categories as $value) {
											?>
											<li class="a_logout_btn">
												<a href="<?php echo site_url('all_collection/categories/') . $value->id ?>">
													<?php echo $value->name?>
												</a>
											</li>
											<?php
										}
									} ?>

								</ul>
							</li>
							<li>
								<a target="_blank" href="https://www.facebook.com/doan.phuong.921025">
									Facebook
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('contact') ?>">
									Liên hệ
								</a>
							</li>
						</ul>
						<ul id="nav-mobile" class="right hide-on-med-and-down">
							<?php
							if (isset($this->session->user_id)) { ?>
								<li>
									<a class="dropdown-button a_username" href="#" data-activates="dropdown1">
										<i class="fa fa-user-circle-o" aria-hidden="true"></i>
										<?php echo($this->session->userdata('username'));
										?>
										<i class="material-icons right">arrow_drop_down</i>
									</a>
									<ul id='dropdown1' class='dropdown-content'>
										<li class="a_logout_btn">
											<a href="<?php echo site_url('login/logout') ?>">
												Đăng xuất
											</a>
										</li>
										<!--										<li>-->
										<!--											<a href="-->
										<?php //echo site_url('user_profile') ?><!--">-->
										<!--												Tài khoản-->
										<!--											</a>-->
										<!--										</li>-->
									</ul>
								</li>
								<?php
							}
							else { ?>
								<li>
									<a href="<?php echo $link_login ?>">
										Đăng nhập
									</a>
								</li>
								<li class="a_menu_register">
									<a href="<?php echo site_url('register') ?>">
										Đăng ký
									</a>
								</li>
							<?php }
							?>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</div>

