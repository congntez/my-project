<?php

/**
 * Created by IntelliJ IDEA.
 * User: phamtrong
 * Date: 14/06/16
 * Time: 15:33
 */
class M_user_management extends Crud_manager {

    protected $_table = 'users';
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

        'email'         => [
            'field'  => 'email',
            'label'  => 'Email',
            'rules'  => 'required|valid_email|is_unique[users.email,deleted=0]|min_length[6]', //As config of Form Validation Class in CodeIngiter
            'errors' => [
                'is_unique' => "Địa chỉ email đã được sử dụng.",
            ],
            'form'   => [
                'type' => 'email',
            ],
            'filter' => [
                'type'        => 'text',
                'search_type' => 'like',
            ],
            'table'  => TRUE,
        ],
        'username'          => [
            'field'  => 'username',
            'label'  => 'Tên người dùng',
            'rules'  => 'required',
            'form'   => [
                'type' => 'text',
                'attr' => 'data-test="name"',
            ],
            'filter' => [
                'search_type' => 'like',
                'attr'        => 'data-test="filter"',
            ],
            'table'  => [
                'label' => 'Tên',
            ],
        ],

        'role_id'       => [
	        'field'    => 'role_id',
	        'db_field' => 'role_id',
	        'label'    => 'Quyền',
	        'rules'    => 'required',
	        'form'     => 'text',
	        'table'  => TRUE,
        ],
        'password'      => [
            'field' => 'password',
            'label' => 'Mật khẩu',
            'rules' => 'required|min_length[6]',
            'form'   => [
	            'type' => 'text',
            ],
            'table'  => [
	            'label' => 'Mật khẩu',
            ],
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
	public function get_status() {
		return [
			'0' => 'Đã kích hoạt',
			'1' => 'Chưa kích hoạt',
		];
	}
}