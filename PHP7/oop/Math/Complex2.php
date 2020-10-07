<?php
class MathComplex2
{
  public $re, $im;
  function __construct($re, $im)
  {
    $this->re = $re;
    $this->im = $im;
  }
  function add (MathComplex2 $y)
  {
    $this->re += $y->re;
    $this->im += $y->im;
  }
  function __toString()
  {
    return "({$this->re}, {$this->im})";
  }
}
?>