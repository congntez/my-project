<?php echo $menu ?>
<div class="b_home_page">
	<div class="container">
		<div class="row">
			<div class="col m3 s12">
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
				<div class="b_home_page_product_title">
					Liên hệ:
				</div>
				<hr class="b_home_page_categories_hr">
				<div class="b_home_page_contact_sub_content">
					<strong>Cobee Sop</strong>
				</div>
				<div class="b_home_page_contact_sub_content">
					- Điện thoại:
					<br>
					<a href="tel:0972898496">097.289.8496</a>
				</div>
				<div class="b_home_page_contact_sub_content">
					- Facebook cá nhân: Doãn Thị Phương
					<br>
					<a target="_blank" href="https://www.facebook.com/doan.phuong.921025"><i>facebook.com/doan.phuong.921025</i></a>
				</div>
				<div class="b_home_page_contact_sub_content">
					- Email:
					<br>
					<a target="_blank" href="mail-to:doanphuong.1996.hp@gmail.com"><i>doanphuong.1996.hp@gmail.com</i></a>
				</div>
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
<?php echo $ft ?>

