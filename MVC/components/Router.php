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
        echo $uri;
        //echo $_SERVER['REQUEST_URI'];
        //Проверить наличие такого запроса в routes.php
        
        // Если есть совпадения, определить какой контроллер 
        // и action обрабатывает запрос
        
        // Подключить фаил класса-контроллера
        
        // Создать объект, вызвать метод (т.е. action)
    }
}
