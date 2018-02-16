<?php

class Router{

   public static function get($controller,$action){

      $filename = '../app/controllers/'.$controller.'.php';

      if (file_exists($filename)) {

	  		// if exist Controller , require it 
         require_once($filename);

         $controller_instance= new $controller;

         if(method_exists($controller_instance, $action)){

            if(!empty($_POST)){

               $controller_instance->$action($_POST);

            }else{
               $controller_instance->$action();
            }

         }else{
            echo "nema  methode";
         }

      } else {
         echo $controller." nepostoji";
      }
   }
}

$router=new Router;


?>