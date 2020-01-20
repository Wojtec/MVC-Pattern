<?php

class ListProducts extends Controller{

    function __construct(){
        parent::__construct();
        
    }
    public function render(){

        $this->view->render('category/index');

   } 

   public function showProducts(){
          
    $this->model->getProducts();

}
}


?>