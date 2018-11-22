<?php echo $menu ?>
<div class="a_home_product">
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
				<div class="row a_product_detail_layout">
					<div class="col m6">
						<div class="b_home_page_product_detail_img" style="background-image: url('<?php echo site_url($products_detail->images) ?>')">
							<div class="b_home_page_sale">
								<?php
								echo $products_detail->sale;
								?>
							</div>
						</div>
					</div>
					<div class="col m6">
						<ul class="a_product_detail_layout_title">
							Chi tiết sản phẩm
						</ul>
						<ul class="a_product_detail_laytout_content">
							<li>
								<b>Mã sản phẩm: </b>
								<?php
								echo $products_detail->name;
								?>
							</li>
							<!--							<li>-->
							<!--								<b>Mã sản phẩm: </b>-->
							<!--								--><?php
							//								echo $products_detail->code;
							//								?>
							<!--							</li>-->
							<li>
								<b>Danh mục: </b>
								<?php
								echo $categories_prod->name;
								?>
							</li>
							<li>
								<b>Giá sản phẩm: </b>
								<?php
								echo $products_detail->price . ' ' . 'đ ' . '(' . '<strike>' . $products_detail->old_price . '</strike>' . 'đ)';
								?>
							</li>
							<li>
								<b>Số lượng: </b>
								<br>
								<a href="#" class="a_btn_count w_btn_count_minus waves-effect waves-light disabled">
									<i class="fa fa-minus"></i>
								</a>
								<input id="i_count_product" type="" name="count" class="a_cout_input w_cout_input"
								       value="1" disabled>
								<a href="#" class="a_btn_count w_btn_count_plus waves-effect waves-light">
									<i class="fa fa-plus"></i>
								</a>
							</li>
							<li style="display: flex">
								<b style="margin-top: 15px">size: </b>
								<div class="input-field col s12">
									<input id="i_cart_size" type="text" placeholder="S, M, L, XL"
									       name="size" class="w_cart_input browser-default">
								</div>
							</li>
							<li>
								<div class="input-field col s12">
									<input id="i_cart_name" type="text" placeholder="Họ và tên"
									       name="name" class="w_cart_input browser-default">
								</div>
							</li>
							<li>
								<div class="input-field col s12">
									<input id="i_cart_phone" type="text" placeholder="Số điện thoại nhận hàng"
									       name="phone" class="w_cart_input browser-default">
								</div>
							</li>
							<li>
								<div class="input-field col s12">
									<input id="i_cart_address" type="text" placeholder="Địa chỉ nhận hàng"
									       name="address" class="w_cart_input browser-default">
								</div>
							</li>
							<li>
								<div class="a_home_intro_btn a_product_detail_btn left">
									<a <?php if (empty($this->session->userdata('user_id'))) {
										echo 'href="' . base_url('login') . '"';
									} ?> class="btn btn_order waves-effect waves-light btn-ezimar-primary wow fadeInDown a_inline_block"
									     data-wow-delay="0.3s" data-wow-duration="2s"
									     data-ajax-url="<?php echo site_url('home/add_to_cart/' . $products_detail->id) ?>">
										<i class="fa fa-shopping-cart prefix left"></i>
										Đặt hàng
									</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
<!--				<div class="row a_product_detail_description">-->
<!--					<div class="a_product_detail_description_title">-->
<!--						Mô tả sản phẩm:-->
<!--					</div>-->
<!--					<hr>-->
<!--					<div class="a_product_detail_description_text">-->
<!--						--><?php
//						$description = $products_detail->description;
//						$pieces = explode("  ", $description);
//						foreach ($pieces as $value) {
//							echo $value.'<br>';
//						}
//						?>
<!--					</div>-->
<!--				</div>-->
			</div>
		</div>
	</div>
</div>
<?php echo $ft ?>

