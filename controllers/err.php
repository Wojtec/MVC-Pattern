<?php
require_once 'libs/controller.php';

class Err extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->message = "Fatal error";
        
    }
    
    public function render(){

        $this->view->render('error/index');

   } 
}

?>