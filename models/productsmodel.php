<?php

include_once 'models/entities/products.php';
include_once 'models/entities/listproducts.php';

class ProductsModel extends Model{

    public function __construct(){

        parent::__construct();
    }

        public function insert($product,$category_id){
            var_dump($category_id);
            try{
             
                $query = $this->db->connect()->prepare('INSERT INTO products (product_name, category_id) VALUES (:products, :category_id)');
                $query->execute(['products' => $product['products'],'category_id' => $category_id['category_id']]);

                echo 'Product ' . $product['products'] . ' add.';
                return true;

            }catch(PDOException $e){
               
                //echo $e->getMessage();
                echo 'Fruit '. $product['products'] . ' already exsists.';
                return false;
            }            
        }
    
       

        public function getCategory(){
            try{
                $query = $this->db->connect()->query("SELECT * FROM category");
                $categories = [];

                while($row = $query->fetch()){
                    $category = new Category();
                    $category->category_id = $row['category_id'];
                    $category->category_name = $row['category_name'];
                    array_push($categories, $category);
                }
                return $categories;
            }catch(PDOException $e){
                echo $e->getMessage();
            }

        }

}


?>