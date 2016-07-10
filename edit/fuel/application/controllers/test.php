<?php
require_once 'base.php';
class test extends base {
     
    function __construct()
    {
        parent::__construct();
    }
     
    function index()
    {
        //... form code goes here
        $this->fuel->pages->render('test_main', $this->vars);
    }
}


?>
