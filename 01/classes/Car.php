<?php
class Car
{

  public static $countCar = 0;

  public $color;
  public $wheels;
  public $speed;

  public function __construct($color, $speed, $wheels=4)
  {
    $this->color = $color;
    $this->speed = $speed;
    $this->wheels = $wheels;
    self::$countCar++;

  }

  public static function beep()
  {
    echo "<h3>BEEP-BEEP</h3>";
  }

  public static function getCount()
  {

  }
}
?>