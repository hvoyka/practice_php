<?php
  class FileLogger0
  {
    public $f;
    public $name;
    public $lines = [];

    public function __construct($name, $fname)
    {
      $this->name = $name;
      $this->f = fopen($fname, "a+");
    }
    public function log($str)
    {
      $prefix = "[" . date("Y-m-d_h:i:s") . "{$this->name}]";
      $str = preg_replace('/^/m', $prefix, rtrim($str));
      $this->lines[] = $str . "\n";
    }
    function close()
    {
      fputs($this->f, join("", $this->lines));
      fclose($this->f);
    }
  }
?>