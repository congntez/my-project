<?php

/**
 * Created by IntelliJ IDEA.
 * User: phamtrong
 * Date: 14/06/16
 * Time: 15:33
 */
class M_role extends Crud_manager {

    protected $_table = 'role';
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
        'name'          => [
            'field'  => 'name',
            'label'  => 'Tên quyền',
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