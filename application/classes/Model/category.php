<?php defined('SYSPATH') or die('No direct script access.');

class Model_Category extends ORM {

    protected $_table_name = 'category';
    protected $_has_many = array(
        'objavlenia' => array(
            'model' => 'objavlenia',
            'through' => 'category_obj',
        ),
    );
}