<?php echo $menu ?>
<div class="a_cart">
	<div class="container">
		<div class="row">
			<div class="col m12 a_home_result">
				<div class="col m12">
					<div class="a_cart_title center">
						Giỏ hàng của bạn
					</div>
				</div>
				<table class="a_cart_table">
					<tr>
						<th>
							Tên sản phẩm
						</th>
						<th>
							Size
						</th>
						<th>
							Số lượng
						</th>
						<th>
							Đơn giá
						</th>
						<th>
							Tổng tiền
						</th>
						<th>
							Tình trạng đơn hàng
						</th>
						<th>
							Hủy đơn hàng
						</th>
					</tr>
					<?php
					if (!empty($cart)) {
						foreach ($cart as $values) {
							if ($values->status !== 'Đã giao hàng') {
								?>
								<tr>
									<td>
										<?php echo $values->prod_name; ?>
									</td>
									<td>
										<?php echo $values->size; ?>
									</td>
									<td>
										<?php echo $values->count; ?>
									</td>
									<td>
										<?php echo $values->prod_price; ?>
									</td>
									<td>
										<?php echo $values->total_price; ?>
									</td>
									<td>
										<?php echo $values->status; ?>
									</td>
									<td>
										<?php
										if ($values->status == 'Đang giao hàng' || $values->status == 'Đã giao hàng') {
											?>
											<span class="btn waves-effect waves-light btn-ezimar-primary btn-gray wow fadeInDown a_inline_block disabled">
											HỦY
											</span>
											<?php
										}
										else {
											?>
											<span data-href="<?php echo site_url('cart/delete/' . $values->id) ?>"
											      data-cart="<?php echo $values->id ?>"
											      class="btn_delete_cart btn waves-effect waves-light btn-ezimar-primary btn-red wow fadeInDown a_inline_block">
												HỦY
											</span>
											<?php
										}
										?>
									</td>
								</tr>
								<?php
							}
						}
					}
					?>
				</table>
			</div>
		</div>
	</div>
</div>
<?php echo $ft ?>

