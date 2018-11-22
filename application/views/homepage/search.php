<div class="a_count_result">
	Kết quả tìm kiếm: <strong><?php echo count($result)?></strong> sản phẩm.
</div>
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
foreach ($result as $key => $value) {
	var_dump($value);
	?>
	<table class="b_home_page_product_table">
		<div class="b_home_page_product_detail">
			<tr>
				<td>
					<div class="b_home_page_product_detail_img">
						<img src="<?php echo site_url($value['images2']) ?>"
						     class="responsive-img" alt="">
					</div>
				</td>
				<td>
					<a href="<?php echo site_url('product_detail/buy/') . $value['id'] . '/'. utf_convert($value['name'] ) ?>"
					   class="b_home_page_product_detail_name center">
						<?php
						echo $value['name'];
						?>
					</a>
				</td>
				<td>
					<div class="b_home_page_product_detail_price">
						<?php
						echo $value['price'] . ' ' . 'VNĐ' . '<br>' . '<span>' . '<strike>' . $value['old_price'] . '</strike>' . ' ' . 'VNĐ' . '</span>';
						?>
					</div>
				</td>
			</tr>
		</div>
	</table>
	<?php
}
?>