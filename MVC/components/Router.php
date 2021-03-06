<?php

class Router
{
    private $routes;
    
    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include ($routesPath);
    }
    /**
     * Returns request string
     * @return string
     */
    private function getURI()
    {
        if(!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/MVC'); //folder MVC in my project
        }
    }


    public function run()
    {
        //Получить строку запроса
        $uri = $this->getURI();
  
        //Проверить наличие такого запроса в routes.php
        foreach ($this->routes as $uriPatterns => $path) {
            //Сравниваем $uriPatterns и $uri
            if(preg_match("~$uriPatterns~", $uri)){   
                
                // Получаем внутренний путь из внешнего, согласно правилу
                $internalRoute = preg_replace("~$uriPatterns~", $path, $uri);
                
                // Определить какой контроллер
                // и action обрабатывает запрос
                $segments = explode("/", $internalRoute);
                
                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);
                
                $actionName = 'action'.ucfirst((array_shift($segments)));
                $parameters = $segments;
                
                $controllerFile = ROOT . '/controllers/' .$controllerName. '.php';
                if (file_exists($controllerFile)) {
                        include_once($controllerFile);
                }

                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                if ($result != null) {
                        break;
                }
            }
             
        }
        
       
    }
}
