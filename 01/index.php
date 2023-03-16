<?php
require_once 'classes/FirstClass.php';
require_once 'classes/Car.php';


$o1 = new FirstClass;
$o2 = new FirstClass;

$car1 = new Car;
$car2 = new Car;

$car1->color = 'black';
$car1->wheels = 4;
$car1->speed = 120;

debug($car1);
debug($car2);

echo "<h3> Об авто </h3>
Цвет: {$car1->color} <br>
Колёс: {$car1->wheels} <br>
Скорость: {$car1->speed}  км/ч <br>
";

function debug($data) {
  echo '<pre>'.print_r($data, 1).'</pre>';
}
?>