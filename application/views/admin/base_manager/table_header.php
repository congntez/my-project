<div class="pull-left padding-10 no-padding-top no-padding-bottom">
    <div id="dataTable_length" class="dataTables_length">
        <button href="<?php echo $delete_list_link; ?>"
                class="btn btn-danger btn-sm  e_ajax_link e_ajax_confirm delete_list_button for_select"
                style="display: none;"><i class="ace-icon fa fa-trash"></i>
            Xóa
        </button>
        <button href="# " class="btn btn-sm e_reverse_button for_select "
                style="display: none;"><i class="ace-icon fa fa-refresh"></i>
            Đảo ngược
        </button>
        <label>
            <span>
            Hiển thị
                <input name="post" type="text"
                       class="input-sm changer_number_record e_changer_number_record"
                       value="20"> bản ghi trên 1 trang
            </span>
        </label>
    </div>
</div>
<div class="pull-right align-right  padding-10 no-padding-top no-padding-bottom header_action btn-group">
    <a href="<?php echo $export_order?>" class="btn btn-sm btn-white btn-info w_ajax_link">
        Xuất Excel danh sách đơn hàng
    </a>
	<a href="<?php echo $export_product?>" class="btn btn-sm btn-white btn-info w_ajax_link">
        Xuất Excel danh sách sản phẩm
    </a>
</div>
<div id="i_loading_overlay" class="c_loading_overlay">
	<div class="c_loading_overlay_main">
		<div class="preloader-wrapper big active">
			<div class="spinner-layer spinner-blue">
				<div class="circle-clipper left">
					<div class="circle"></div>
				</div>
				<div class="gap-patch">
					<div class="circle"></div>
				</div>
				<div class="circle-clipper right">
					<div class="circle"></div>
				</div>
			</div>
			<div class="spinner-layer spinner-red">
				<div class="circle-clipper left">
					<div class="circle"></div>
				</div>
				<div class="gap-patch">
					<div class="circle"></div>
				</div>
				<div class="circle-clipper right">
					<div class="circle"></div>
				</div>
			</div>
			<div class="spinner-layer spinner-yellow">
				<div class="circle-clipper left">
					<div class="circle"></div>
				</div>
				<div class="gap-patch">
					<div class="circle"></div>
				</div>
				<div class="circle-clipper right">
					<div class="circle"></div>
				</div>
			</div>
			<div class="spinner-layer spinner-green">
				<div class="circle-clipper left">
					<div class="circle"></div>
				</div>
				<div class="gap-patch">
					<div class="circle"></div>
				</div>
				<div class="circle-clipper right">
					<div class="circle"></div>
				</div>
			</div>
		</div>
	</div>
</div>