<?php

class Application {
    public static function process()
    {
        $controllerName = "Article";
        $task = "index";
        
        if(!empty($_GET['controller'])){
            //EX: GET => article
            //Article (Changer de Controller enl'envoyant en GET)
            $controllerName = ucfirst($_GET['controller']);
        }

        if(!empty($_GET['task'])){
            $task = $_GET['task'];
        }

        $controllerName = "\Controllers\\" . $controllerName;

        $controller = new $controllerName();
        $controller->$task();
    }
}

