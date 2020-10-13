<?php
  class Hooker {
    public $opened = 'opened';
    public function method(){
      echo "Обычный метод класса вызван(method)<br>";
    }
    private $vars = array();

    public function __get($name)
    {
      echo "Перехват __get: получаем значение $name.<br>";
      return isset($this->vars[$name]) ? $this->vars[$name] : null;
    }
    public function __set($name, $value) 
    {
      echo "Перехват __set: устанавливаем значение $name равным $value. <br>";
      return $this->vars[$name] = trim($value);
    }
    public function __call($name, $args)
    {
      echo "Перехват __call: вызываем $name с аргументами: ";
      var_dump($args);
      return $args[0];
    }
  }

  $obj = new Hooker();

  echo "<b>Получаем значение обычного свойства</b><br>";
  echo "Значение: {$obj->opened} <br>";
  echo "<b>Вызываем обычный метод</b><br>";
  $obj->method();
  echo "<b>Присваивание несуществующему свойству.</b><br>";
  $obj->nonExist = 101;
  echo "<b>Получение значения несуществующего свойства.</b><br>";
  echo "Значение: {$obj->nonExist} <br>";
  echo "<b>Обращение к несуществующему методу.</b><br>";
  $obj->nonExist(6);
?>