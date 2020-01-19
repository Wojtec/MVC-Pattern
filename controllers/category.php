<?php

class Category extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->render('category/index');
    }
}


?>