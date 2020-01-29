<?php
class Core{
   
    public function run(){

        $url = "/".(isset($_GET['url'])? $_GET["url"] : "");

        $currentController = "homeController";
        $currentAction = "index";
        $params = array();

        if($url != "/"){
            
            $url = explode("/",$url);
            array_shift($url);
            
            $currentController = $url[0]."Controller";
            array_shift($url);

            if(isset($url[0]) && $url[0] != ""){
               $currentAction = $url[0];
               array_shift($url); 
            }
            
            if(count($url)){
                $params = $url;
            }
        }
        
        $controller = new $currentController();
        call_user_func_array(array($controller,$currentAction),$params);



    }
}