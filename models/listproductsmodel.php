<?php

include_once 'models/entities/products.php';
include_once 'models/entities/listproducts.php';

class listProductsModel extends Model{

    public function __construct(){
        parent::__construct();
    }
    
    public function getProducts(){
              
        try{
            $query = $this->db->connect()->query("SELECT * FROM products, category WHERE products.category_id=category.category_id ");
            $products = [];
            while($row = $query->fetch()){
                $product = new Product();
                $product->product_id = $row['product_id'];
                $product->category_id = $row['category_id'];
                $product->date_publish = $row['date_publish'];
                $product->product_name = $row['product_name'];
                $product->category_name = $row['category_name'];
                array_push($products,$product);
            }

            return $products;
            }catch(PDOException $e){
                echo $e->getMessage();
            }

    }

}


?>