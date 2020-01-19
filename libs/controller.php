<?php

class Controller{

    function __construct(){
        

        $this->view = new View();
    }

        function loadModel($model){
            var_dump($model);
            $url = 'models/' . $model . 'model.php';

            if(file_exists($url)){

                require $url;

                $modelName = $model. 'Model';
                $this->model = new $modelName;
            }

        }


}
?>