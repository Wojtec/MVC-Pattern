<?php

class Products extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->category = [];
       
    }
       public function render(){
            $category =  $this->model->getCategory();
            $this->view->category = $category;
            $this->view->render('products/index');
        } 

       public function addProduct(){
        $product = $_POST['products'];
        $category = $_POST['category'];

        $this->model->insert(['products' => $product],['category_id' => $category]);
      
        }

   
       public function showCategory(){

            $this->model->getCategory();
        }
}

?>