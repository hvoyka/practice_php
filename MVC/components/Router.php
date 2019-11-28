<?php

class Router
{
    private $routes;
    
    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include ($routesPath);
    }
    public function run()
    {
        //Получить строку запроса
        
        //Проверить наличие такого запроса в routes.php
        
        // Если есть совпадения, определить какой контроллер 
        // и action обрабатывает запрос
        
        // Подключить фаил класса-контроллера
        
        // Создать объект, вызвать метод (т.е. action)
    }
}
