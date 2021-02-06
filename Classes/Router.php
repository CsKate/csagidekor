<?php

class Router {
    
    public function __construct($uri){
       
        $query = explode("/", $uri);
        
        
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            
            switch ($query[1]){
                case "":
                    require 'Views/munkaim.php';
                break;

                case "munkaim":
                    require 'Views/munkaim.php';
                break;
                case "bemutatkozas":
                    require 'Views/bemutatkozas.php';
                break;
                case "kapcsolat":
                    require 'Views/kapcsolat.php';
                break;
                case "privacypolicy":
                    require 'Views/privacypolicy.php';
                break;
            }
            
           
            
        }
        
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            
            
            
            
        }
        
        
        
        
    }
}



?>