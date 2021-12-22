<?php

require_once __DIR__ . '/src/Car.php';
require_once __DIR__ . '/src/CarBuilder.php';

$builder = \App\CarBuilder::create()
    ->withMake('Opel')
    ->withModel('Pastra')
    ->withYear('1993');


$car = $builder->build();
var_dump($car);