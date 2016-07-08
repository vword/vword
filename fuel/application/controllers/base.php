<?php

class base extends CI_Controller {
    
    protected $vars = array(
            'page_title' => 'Contact : My Website',
            'layout'=>'test',
            'js'=>array(
                'angular.min.js',
                'bootstrap.min.js',
                'jstorage.min.js'),
            'css'=>array('bootstrap.min.css')
            );
    function __construct()
    {
        parent::__construct();
    }
}


?>
