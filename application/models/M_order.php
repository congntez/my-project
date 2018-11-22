<?php

/**
 * Created by IntelliJ IDEA.
 * User: phamtrong
 * Date: 14/06/16
 * Time: 15:33
 */
class M_order extends Crud_manager {

	protected $_table = 'order';
	public $schema = [
		'id'               => [
			'field'    => 'id',
			'db_field' => 'id',
			'label'    => 'id',
			'rules'    => '',
			'table'    => [
				'label' => 'Thứ tự',
			],
		],
		'customer_id'      => [
			'field'  => 'customer_id',
			'label'  => 'Id khách hàng',
//			'rules'  => 'required', //As config of Form Validation Class in CodeIngiter
			'errors' => [
				'is_unique' => "Địa chỉ email đã được sử dụng.",
			],
		],
		'prod_name'        => [
			'field'  => 'prod_name',
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
		'size'             => [
			'field'  => 'size',
			'label'  => 'Size',
			'rules'  => 'required', //As config of Form Validation Class in CodeIngiter
			'errors' => [],
			'form'   => [
				'type' => 'text',
			],
			'filter' => [
				'type'        => 'text',
				'search_type' => 'like',
			],
			'table'  => TRUE,
		],
//		'prod_code'        => [
//			'field'  => 'prod_code',
//			'label'  => 'Mã sản phẩm',
//			'rules'  => 'required', //As config of Form Validation Class in CodeIngiter
//			'errors' => [
//				'is_unique' => "Địa chỉ email đã được sử dụng.",
//			],
//			'form'   => [
//				'type' => 'text',
//			],
//			'table'  => TRUE,
//		],
		'count'            => [
			'field'  => 'count',
			'label'  => 'Số lượng',
			'rules'  => 'required', //As config of Form Validation Class in CodeIngiter
			'errors' => [
				'is_unique' => "Địa chỉ email đã được sử dụng.",
			],
			'form'   => [
				'type' => 'text',
			],
			'table'  => TRUE,
		],
		'prod_price'       => [
			'field'  => 'prod_price',
			'label'  => 'Đơn giá',
			'rules'  => 'required', //As config of Form Validation Class in CodeIngiter
			'errors' => [
				'is_unique' => "Địa chỉ email đã được sử dụng.",
			],
			'form'   => [
				'type' => 'text',
			],
			'table'  => TRUE,
		],
		'total_price'      => [
			'field'  => 'total_price',
			'label'  => 'Tổng tiền',
			'rules'  => 'required', //As config of Form Validation Class in CodeIngiter
			'errors' => [
				'is_unique' => "Địa chỉ email đã được sử dụng.",
			],
			'form'   => [
				'type' => 'text',
			],
			'table'  => TRUE,
		],
		'customer_name'    => [
			'field'  => 'customer_name',
			'label'  => 'Tên khách hàng',
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
		'customer_phone'   => [
			'field'  => 'customer_phone',
			'label'  => 'Số điện thoại',
			'rules'  => 'required', //As config of Form Validation Class in CodeIngiter
			'errors' => [
				'is_unique' => "Địa chỉ email đã được sử dụng.",
			],
			'form'   => [
				'type' => 'text',
			],
			'table'  => TRUE,
		],
		'customer_address' => [
			'field'  => 'customer_address',
			'label'  => 'Địa chỉ',
			'rules'  => 'required', //As config of Form Validation Class in CodeIngiter
			'errors' => [
				'is_unique' => "Địa chỉ email đã được sử dụng.",
			],
			'form'   => [
				'type' => 'text',
			],
			'table'  => TRUE,
		],
		'time'             => [
			'field'  => 'time',
			'label'  => 'Thời gian đặt',
			'rules'  => 'required', //As config of Form Validation Class in CodeIngiter
			'errors' => [
				'is_unique' => "Địa chỉ email đã được sử dụng.",
			],
			'form'   => [
				'type' => 'text',
			],
			'table'  => TRUE,
		],
		'status'           => [
			'field'  => 'status',
			'label'  => 'Trạng thái',
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
	];

	public function __construct() {
		parent::__construct();
	}

	public function get_status() {
		return [
			'Đặt hàng thành công' => 'Đặt hàng thành công',
			'Đang chờ liên hệ'    => 'Đang chờ liên hệ',
			'Đang giao hàng'      => 'Đang giao hàng',
			'Đã giao hàng'        => 'Đã giao hàng'
		];
	}
}