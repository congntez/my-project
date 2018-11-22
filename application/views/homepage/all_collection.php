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
					foreach ($categories as $key => $values_cat) {
						?>
						<div class="b_home_page_categories_layout_row">
							<a href="<?php echo base_url('all_collection/categories/' . $values_cat->id) ?>"
							   class="b_home_page_categories_layout_name w_home_page_categories_layout_name center <?php if ($categories_id == $values_cat->id) {
								   echo "active";
							   } ?>">
								<?php
								echo $values_cat->name . ' (' . $values_cat->count_prod . ')';
								?>
							</a>
						</div>
						<?php
					}
				}
				?>
			</div>
			<div class="col m9 s12 a_home_result">
				<table class="b_home_page_product_table">
					<?php
					if (!empty($products)) {
						foreach ($products as $values_product) {
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
										<a href="<?php echo site_url('product_detail/buy/') . $values_product->id . '/'. ($values_product->convert_name) ?>"
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
										if($values_product->status == 0) {
											?>
											<div class="a_home_intro_btn a_product_detail_btn">
												<a class="btn btn_order waves-effect waves-light btn-ezimar-primary wow fadeInDown a_inline_block"
												   data-wow-delay="0.3s" data-wow-duration="2s"
												   href="<?php echo site_url('product_detail/buy/') . $values_product->id . '/'. ($values_product->convert_name) ?>">
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
					else {
						?>
						<th class="b_home_page_no_product center">
							Không có sản phẩm nào trong kho, vui lòng chọn sản phẩm khác!
						</th>
						<?php
					}
					?>
				</table>
			</div>
		</div>
	</div>
</div>
<?php

?>
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

