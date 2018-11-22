<?php

/**
 * Created by IntelliJ IDEA.
 * User: phamtrong
 * Date: 14/06/16
 * Time: 15:33
 */
class M_products_management extends Crud_manager {

	public function get_search($search) {
		// Use the Active Record class for safer queries.
		$this->db->select('*');
		$this->db->from('products');
		$this->db->like('name',$search);

		// Execute the query.
		$query = $this->db->get();

		// Return the results.
		return $query->result_array();
	}

	protected $_table = 'products';
	public $schema = [
		'id'          => [
			'field'    => 'id',
			'db_field' => 'id',
			'label'    => 'id',
			'rules'    => '',
			'table'    => [
				'label' => 'Thứ tự',
			],
		],
		'name'        => [
			'field'  => 'name',
			'label'  => 'Tên sản phẩm',
			'rules'  => 'required', //As config of Form Validation Class in CodeIngiter
			'errors' => [
				'is_unique' => "Địa chỉ email đã được sử dụng.",
			],
			'form'   => [
				'type' => 'text',
			],
			'filter' => [
				'type'        => 'text',
				'search_type' => 'like',
			],
			'table'  => TRUE,
		],
		'description'        => [
			'field'  => 'description',
			'label'  => 'Mô tả',
			'errors' => [
				'is_unique' => "Địa chỉ email đã được sử dụng.",
			],
			'form'   => [
				'type' => 'text',
			],
			'table'  => TRUE,
		],
		'old_price'       => [
			'field' => 'old_price',
			'label' => 'Giá cũ',
			'rules' => '',
			'form'  => [
				'type' => 'text',
			],
			'table' => TRUE,
		],

		'price'       => [
			'field' => 'price',
			'label' => 'Giá hiện tại',
			'rules' => 'required',
			'form'  => [
				'type' => 'text',
			],
			'table' => TRUE,
		],

//		'images2'     => [
//			'field'    => 'images2',
//			'db_field' => 'images2',
//			'label'    => 'Ảnh mô tả 1',
//			'rules'    => 'required',
//			'form'     => [
//				'type'   => 'file', //multiple_file
//				'class'  => 'ace_file_input',//Use ACE theme for file input
////                'attr'         => 'data-disable_client_validate=1',//Disable validate in client
//				'upload' => [//As config of File Upload Class in codeingiter
//					'upload_path'      => 'public/upload/product',
//					'allowed_types'    => 'gif|jpg|png|jpeg',
//					'max_size'         => '2048',
////                    'min_size'         => '100',
//					'min_width'        => 300,
//					'min_height'       => 300,
////                    'max_width'        => 1200,
////                    'max_height'       => 1600,
//					'encrypt_name'     => TRUE,
//					'file_ext_tolower' => TRUE,
//				],
//			],
//			'table'    => [
//				'callback_render_data' => "show_img",
//			],
//		],
//
//		'images3'     => [
//			'field'    => 'images3',
//			'db_field' => 'images3',
//			'label'    => 'Ảnh mô tả 2',
//			'rules'    => 'required',
//			'form'     => [
//				'type'   => 'file', //multiple_file
//				'class'  => 'ace_file_input',//Use ACE theme for file input
////                'attr'         => 'data-disable_client_validate=1',//Disable validate in client
//				'upload' => [//As config of File Upload Class in codeingiter
//					'upload_path'      => 'public/upload/product',
//					'allowed_types'    => 'gif|jpg|png|jpeg',
//					'max_size'         => '2048',
////                    'min_size'         => '100',
//					'min_width'        => 300,
//					'min_height'       => 200,
////                    'max_width'        => 1200,
////                    'max_height'       => 1600,
//					'encrypt_name'     => TRUE,
//					'file_ext_tolower' => TRUE,
//				],
//			],
////			'table'    => [
////				'callback_render_data' => "show_img",
////			],
//		],

		'images'      => [
			'field'    => 'images',
			'db_field' => 'images',
			'label'    => 'Ảnh sản phẩm',
//			'rules'    => 'required',
			'form'     => [
				'type'   => 'file', //multiple_file
				'class'  => 'ace_file_input',//Use ACE theme for file input
//                'attr'         => 'data-disable_client_validate=1',//Disable validate in client
				'upload' => [//As config of File Upload Class in codeingiter
					'upload_path'      => 'public/upload/product',
					'allowed_types'    => 'gif|jpg|png|jpeg',
					'max_size'         => '2048',
//                    'min_size'         => '100',
					'min_width'        => 300,
					'min_height'       => 300,
//                    'max_width'        => 1200,
//                    'max_height'       => 1600,
					'encrypt_name'     => TRUE,
					'file_ext_tolower' => TRUE,
				],
			],
			'table'    => [
				'callback_render_data' => "show_img",
			],
		],

		'cat_id' => [
			'field'  => 'cat_id',
			'label'  => 'Danh mục',
			'rules'  => 'required', //As config of Form Validation Class in CodeIngiter
			'errors' => [
				'is_unique' => "Địa chỉ email đã được sử dụng.",
			],

			'form'   => [
				'type'            => 'select',
				'class'           => 'select2',
				'target_model'    => 'M_categories_management',
				'target_function' => 'dropdown',
				'target_arg'      => ['id', 'name'],
			],
			'filter' => [
				'type'        => 'text',
				'search_type' => 'like',
			],
			'table'  => TRUE,
		],

		'status'         => [
			'field'  => 'status',
			'label'  => 'Tính trạng',
			'rules'  => 'required', //As config of Form Validation Class in CodeIngiter
			'errors' => [
				'is_unique' => "Địa chỉ email đã được sử dụng.",
			],

			'form'   => [
				'type'            => 'select',
				'target_model'    => 'this',
				'target_function' => 'get_status',
				'class'           => 'inline_select',
			],
			'table'  => TRUE,
		],

		'show_home'         => [
			'field'  => 'show_home',
			'label'  => 'Hiển thị trên trang chủ',
			'rules'  => 'required', //As config of Form Validation Class in CodeIngiter
			'errors' => [
				'is_unique' => "Địa chỉ email đã được sử dụng.",
			],

			'form'   => [
				'type'            => 'select',
				'target_model'    => 'this',
				'target_function' => 'get_show_home',
				'class'           => 'inline_select',
			],
			'table'  => TRUE,
		],

		'created_on' => [
			'field' => 'created_on',
			'label' => 'Ngày tạo',
			'rules' => 'readonly',
		],
	];


	public function __construct() {
		parent::__construct();
	}

	function show_img($origin_column_value, $column_name, &$record, $column_data, $caller) {
		$link = $record->images;
		$view = '<img style="max-height:150px " src="' . base_url($link) . '">';

		return $view;
	}

	public function get_status() {
		return [
			'1' => 'Còn hàng',
			'0' => 'Hết hàng',
		];
	}

	public function get_show_home() {
		return [
			'1' => 'Hiển thị trên trang chủ',
			'0' => 'Không Hiển thị trên trang chủ',
		];
	}
}