<?php

class Products extends Controller{

    function __construct(){
        
        parent::__construct();
        $this->view->render('products/index');
    }

       public function addProduct(){
            
            echo 'hey im add';

            $this->model->insert();
       }
    
}




?>