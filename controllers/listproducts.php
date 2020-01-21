<?php

class ListProducts extends Controller{

    function __construct(){
        parent::__construct();
        
    }
    public function render(){
        $products = $this->model->getProducts();
        $this->view->products = $products;
        $this->view->render('listproducts/index');

   } 

  
}


?>