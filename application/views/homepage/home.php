<?php echo $menu ?>
<div class="b_home_page">
	<div class="container">
		<div class="row">
			<div class="col m3 s12 b_home_page_categories_layout">
				<div class="b_home_page_categories_title">
					Danh mục sản phẩm
				</div>
				<hr class="b_home_page_categories_hr">
				<?php
				if (isset($categories)) {
					foreach ($categories as $key => $values) {
						?>
						<div class="b_home_page_categories_layout_row">
							<a href="<?php echo base_url('all_collection/categories/' . $values->id) ?>"
							   class="b_home_page_categories_layout_name w_home_page_categories_layout_name center">
								<?php
								echo $values->name . ' (' . $values->count_prod . ')';
								?>
							</a>
						</div>
						<?php
					}
				}
				?>
			</div>
			<div class="col m9 s12 a_home_result">
				<div class="a_home_slider">
					<div class="w3-content w3-display-container" style="max-width:800px; margin: auto">
						<img class="mySlides" src="<?php echo site_url('public/assets/images/homepage/banner1.png') ?>"
						     style="width:100%">
						<img class="mySlides" src="<?php echo site_url('public/assets/images/homepage/banner2.png') ?>"
						     style="width:100%">
						<img class="mySlides" src="<?php echo site_url('public/assets/images/homepage/banner3.png') ?>"
						     style="width:100%">
						<div class="w3-center w3-container a_home_slider_btn w3-section w3-large w3-text-white w3-display-bottommiddle"
						     style="width:100%">
							<div class="a_home_slider_btn_pre" onclick="plusDivs(-1)">&#10094;</div>
							<div class="a_home_slider_btn_next" onclick="plusDivs(1)">&#10095;</div>
							<span class="w3-badge demo w3-border w3-transparent w3-hover-white"
							      onclick="currentDiv(1)"></span>
							<span class="w3-badge demo w3-border w3-transparent w3-hover-white"
							      onclick="currentDiv(2)"></span>
							<span class="w3-badge demo w3-border w3-transparent w3-hover-white"
							      onclick="currentDiv(3)"></span>
						</div>
					</div>
				</div>
				<?php
				if (isset($categories)) {
					foreach ($categories as $values) {
						?>
						<div class="b_home_page_product_title">
							<?php
							echo $values->name;
							?>
						</div>
						<hr class="b_home_page_categories_hr">
						<table class="b_home_page_product_table">
							<?php
							if (!function_exists('utf_convert')) {
								// ... proceed to declare your function
								function utf_convert($str) {
									if (!$str) return FALSE;
									$utf8 = array(
										'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
										'd' => 'đ|Đ',
										'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
										'i' => 'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
										'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
										'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
										'y' => 'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
									);
									foreach ($utf8 as $ascii => $uni) {
										$str = preg_replace("/($uni)/i", $ascii, $str);
									}
									$str = preg_replace('/[^A-Za-z0-9\-]/', '-', $str);
									$str = str_replace("--", "-", $str);
									$str = str_replace("---", "-", $str);
									$str = strtolower($str);

									return $str;
								}
							}
							if (isset($products)) {
								foreach ($products as $values_product) {
									if ($values_product->cat_id === $values->id && $values_product->show_home == 1) {
										?>

										<div class="b_home_page_product_detail">
											<div class="col m4 s12">
												<div class="center">
													<div class="b_home_page_product_detail_img" style="background-image: url('<?php echo site_url($values_product->images) ?>')">
														<div class="b_home_page_sale">
															<?php
															echo $values_product->sale;
															?>
														</div>
													</div>
													<a href="<?php echo site_url('product_detail/buy/') . $values_product->id . '/'. utf_convert($values_product->name) ?>"
													   class="b_home_page_product_detail_name center">
														<?php
														echo 'Mã sản phẩm: ' . $values_product->name;
														?>
													</a>
													<div class="b_home_page_product_detail_price">
														<?php
														echo  '<strike>' . $values_product->old_price . '</strike>' . ' ' . 'VNĐ' . '<br>' . 'Chỉ còn <span>' . $values_product->price . ' ' . 'VNĐ' . '</span>';
														?>
													</div>
													<?php
														if($values_product->status == 1) {
															?>
															<div class="a_home_intro_btn a_product_detail_btn">
																<a class="btn btn_order waves-effect waves-light btn-ezimar-primary wow fadeInDown a_inline_block"
																   data-wow-delay="0.3s" data-wow-duration="2s"
																   href="<?php echo site_url('product_detail/buy/') . $values_product->id . '/'. utf_convert($values_product->name) ?>">
																	<i class="fa fa-shopping-cart prefix left"></i>
																	Đặt hàng
																</a>
															</div>
															<?php
														}
														else {
															?>
															<div class="a_home_intro_btn a_product_detail_btn">
																<a class="btn btn_order waves-effect waves-light btn-ezimar-primary wow fadeInDown a_inline_block"
																   data-wow-delay="0.3s" data-wow-duration="2s"
																   href="#">
																	<i class="fa fa-shopping-cart prefix left"></i>
																	Tạm hết hàng
																</a>
															</div>
															<?php
														}
													?>
												</div>

											</div>
										</div>
										<?php
									}
								}
							}
							?>
						</table>
						<div class="b_home_page_product_detail_btn">
							<a class="a_read_more_btn a_inline_block"
							   href="<?php echo base_url('all_collection/categories/' . $values->id) ?>">
								Xem thêm <?php echo $values->name ?>
								<i class="fa fa fa-angle-right right prefix"></i>
							</a>
						</div>
						<?php
					}
				}
				?>
			</div>
		</div>
	</div>
</div>
<!--<div class="a_home_product">-->
<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			<div class="col m12">-->
<!--				<div class="a_home_product_title left">-->
<!--					Kính thời trang-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--		<div class="row">-->
<!--			<hr class="a_home_product_hr">-->
<!--		</div>-->
<!--		<div class="row">-->
<!--			--><?php
//			if (!empty($glasses)) {
//				foreach ($glasses as $values) {
//					?>
<!--					<div class="col m3 s12">-->
<!--						<div class="a_home_product_layout">-->
<!--							<a href="#" class="a_home_product_img">-->
<!--								<img src="--><?php //echo $values->images ?><!--" alt="" class="responsive-img">-->
<!--							</a>-->
<!--							<div class="a_home_product_name center">-->
<!--								--><?php //echo $values->name; ?>
<!--							</div>-->
<!--							<div class="a_home_product_code center">-->
<!--								Mã sản phẩm: --><?php //echo $values->code; ?>
<!--							</div>-->
<!--							<div class="a_home_product_des center">-->
<!--								--><?php //echo $values->description; ?>
<!--							</div>-->
<!--							<div class="center">-->
<!--								<div class="a_home_product_price">-->
<!--									<p>-->
<!--										--><?php //echo $values->old_price; ?>
<!--									</p>-->
<!--									<p>-->
<!--										--><?php //echo $values->price; ?><!-- đ-->
<!--									</p>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="a_home_intro_btn center">-->
<!--								<a class="btn waves-effect waves-light btn-ezimar-primary wow fadeInDown a_inline_block"-->
<!--								   data-wow-delay="0.3s" data-wow-duration="2s" href="--><?php //echo site_url('product_detail/buy/') . $values->id ?><!--">-->
<!--									<i class="fa fa-shopping-cart prefix left"></i>-->
<!--									Mua ngay-->
<!--								</a>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--					--><?php
//				}
//			}
//			?>
<!--		</div>-->
<!--		<div class="row">-->
<!--			<div class="a_home_intro_btn center">-->
<!--				<a class="btn waves-effect waves-light btn-ezimar-primary wow fadeInDown a_inline_block"-->
<!--				   data-wow-delay="0.3s" data-wow-duration="2s" href="--><?php //echo base_url('glasses')?><!--">-->
<!--					XEM THÊM KÍNH-->
<!--				</a>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			<div class="col m12">-->
<!--				<div class="a_home_product_title left">-->
<!--					Phụ kiện thời trang-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--		<div class="row">-->
<!--			<hr class="a_home_product_hr">-->
<!--		</div>-->
<!--		<div class="row">-->
<!--			--><?php
//			if (!empty($accessories)) {
//				foreach ($accessories as $values) {
//					?>
<!--					<div class="col m3">-->
<!--						<div class="a_home_product_layout">-->
<!--							<a href="#" class="a_home_product_img">-->
<!--								<img src="--><?php //echo $values->images ?><!--" alt="" class="responsive-img">-->
<!--							</a>-->
<!--							<div class="a_home_product_name center">-->
<!--								--><?php //echo $values->name; ?>
<!--							</div>-->
<!--							<div class="a_home_product_code center">-->
<!--								Mã sản phẩm: --><?php //echo $values->code; ?>
<!--							</div>-->
<!--							<div class="a_home_product_des center">-->
<!--								--><?php //echo $values->description; ?>
<!--							</div>-->
<!--							<div class="center">-->
<!--								<div class="a_home_product_price">-->
<!--									<p>-->
<!--										--><?php //echo $values->old_price; ?>
<!--										` </p>-->
<!--									<p>-->
<!--										--><?php //echo $values->price; ?>
<!--									</p>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="a_home_intro_btn center">-->
<!--								<a class="btn waves-effect waves-light btn-ezimar-primary wow fadeInDown a_inline_block"-->
<!--								   href="--><?php //echo site_url('product_detail/buy/') . $values->id ?><!--">-->
<!--									<i class="fa fa-shopping-cart prefix left"></i>-->
<!--									Mua ngay-->
<!--								</a>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--					--><?php
//				}
//			}
//			?>
<!--		</div>-->
<!--		<div class="row">-->
<!--			<div class="a_home_intro_btn center">-->
<!--				<a class="btn waves-effect waves-light btn-ezimar-primary wow fadeInDown a_inline_block"-->
<!--				   data-wow-delay="0.3s" data-wow-duration="2s" href="--><?php //echo base_url('earrings')?><!--">-->
<!--					XEM THÊM PHỤ KIỆN-->
<!--				</a>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<script>
	var slideIndex = 1;
	showDivs(slideIndex);
	autoSlide();

	function plusDivs(n) {
		showDivs(slideIndex += n);
	}

	function currentDiv(n) {
		showDivs(slideIndex = n);
	}

	function autoSlide() {
		setInterval(function () {
			showDivs(slideIndex = slideIndex + 1);
		}, 6000);
	}

	function showDivs(n) {
		var i;
		var x = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("demo");
		if (n > x.length) {
			slideIndex = 1
		}
		if (n < 1) {
			slideIndex = x.length
		}
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" w3-white", "");
		}
		x[slideIndex - 1].style.display = "block";
		dots[slideIndex - 1].className += " w3-white";
	}
</script>
<?php echo $ft ?>

