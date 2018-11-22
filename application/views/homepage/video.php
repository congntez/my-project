<?php echo $menu ?>
<div class="b_home_page">
	<div class="container">
		<div class="row">
			<div class="b_home_page_video a_home_result">
				<div class="col m12">
					<div class="b_home_page_video_title">
						1. Dạy Harmonica
					</div>
					<?php
					if (isset($video_training)) {
						foreach ($video_training as $value) {
							$id_video = substr($value->link,32);
							?>
							<div class="col m6">
								<iframe width="100%" height="315"
								        src="<?php echo 'https://www.youtube.com/embed/'. $id_video?>">
								</iframe>
								<div class="b_home_page_video_name center">
									<?php echo $value->name ?>
								</div>
							</div>
							<?php
						}
					}
					?>
				</div>
				<div class="col m12">
					<div class="b_home_page_video_title">
						2. Chơi Harmonica
					</div>
					<?php
					if (isset($video_play)) {
						foreach ($video_play as $value_play) {
							$id_video = substr($value_play->link,32);
							?>
							<div class="col m6">
								<iframe width="100%" height="315"
								        src="<?php echo 'https://www.youtube.com/embed/'. $id_video?>">
								</iframe>
								<div class="b_home_page_video_name center">
									<?php echo $value_play->name ?>
								</div>
							</div>
							<?php
						}
					}
					?>
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

