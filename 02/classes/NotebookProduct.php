<?php
require_once 'I3D.php';
require_once './traits/TColor.php';

class NotebookProduct extends Product implements I3D
{

  use TColor;
  public $cpu;

  public function __construct($name, $price, $cpu)
  {
    parent::__construct($name, $price);
    $this->cpu=$cpu;
  }

  public function getCpu()
  {
    return $this->cpu;
  }

  public function getProduct()
  {
    $out = parent::getProduct();
    $out.="Процессор: {$this->cpu}<br>";
    return $out;
  }

  public function testInterface() {
    return self::TEST2;
  }

}
?>