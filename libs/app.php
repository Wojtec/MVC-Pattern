<?php
require_once 'controllers/err.php';
class App {

    function __construct(){

        echo '<h1> HEY im APP</h1>';
        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);


        $fileController = 'controllers/' . $url[0] . '.php';
        if(file_exists($fileController)){
            require_once $fileController;
            $controller = new $url[0];
            var_dump($url[2]);

                if(isset($url[1])){
                    $controller->{$url[1]}();

                }
        }else{
            $controller = new Error();
        }
            
        
    }


}




?>