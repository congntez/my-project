<?php

/**
 * Created by IntelliJ IDEA.
 * User: phamtrong
 * Date: 14/06/16
 * Time: 15:33
 */
class M_categories_management extends Crud_manager {

    protected $_table = 'categories';
    public $schema = [
	    'id'       => [
		    'field'    => 'id',
		    'db_field' => 'id',
		    'label'    => 'id',
		    'rules'    => '',
		    'table'  => [
			    'label' => 'Thứ tự',
		    ],
	    ],
        'name'         => [
            'field'  => 'name',
            'label'  => 'Tên loại sản phẩm',
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
	    'description'          => [
		    'field'  => 'description',
		    'label'  => 'Mô tả',
//		    'rules'  => 'required',
		    'form'   => [
			    'type' => 'text',
		    ],
		    'table'  => TRUE,
	    ],
	    'created_on'    => [
		    'field' => 'created_on',
		    'label' => 'Ngày tạo',
		    'rules' => 'readonly',
		    'table' => [
			    'callback_render_data' => "timestamp_to_date",
			    'class'                => "hidden-480",
			    'attr'                 => 'data-check=\'true\'',
		    ],
	    ],
    ];


    public function __construct() {
        parent::__construct();
    }
}