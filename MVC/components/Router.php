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
            if(preg_match("~^$uriPatterns$~", $uri)){
                // Определить какой контроллер
                // и action обрабатывает запрос
                $segments = explode("/", $path);
                
                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);
                
                $actionName = 'action' . ucfirst(array_shift($segments));
                echo "<br> Класс: " . $controllerName;
                echo "<br> Метод: " . $actionName;
                
            }
        }
        // Если есть совпадения, определить какой контроллер 
        // и action обрабатывает запрос
        
        // Подключить фаил класса-контроллера
        
        // Создать объект, вызвать метод (т.е. action)
    }
}
