<?php defined('SYSPATH') or die('No direct script access.');

class Model_Objavlenia extends ORM {

    protected $_table_name = 'objavlenia';
    protected $_has_many = array(
        'category'  => array(
            'model'       => 'category',
            'through' => 'category_obj',
        )
    );


}
