<?php
require_once 'classes/FirstClass.php';
require_once 'classes/Car.php';
require_once 'classes/File.php';


$o1 = new FirstClass;
$o2 = new FirstClass;

$car1 = new Car("black", 300, 4);
$car2 = new Car("white", 100, 4);

debug($car1);
debug($car2);

echo "<h3> Об авто </h3>
Цвет: {$car1->color} <br>
Колёс: {$car1->wheels} <br>
Скорость: {$car1->speed}  км/ч <br>
";

echo "Создано машин на производтсве: ".Car::getCount();

$file = new File(__DIR__.'/file.txt');
$file->write("Я помню чудное мгновение");
$file->write("Передо мной явилась ты");

function debug($data) {
  echo '<pre>'.print_r($data, 1).'</pre>';
}
?>