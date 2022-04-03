<?php

require_once 'classes.php';

$bike = new Bike('blue', 2);
$skateboard = new Skateboard('black', 2);
$car = new Car('red', 4);
$motor = new MotorWay;
$motor->addVehicle($bike);
$motor->addVehicle($skateboard);
$motor->addVehicle($car);
var_dump($motor);
$pedestrian = new PedestrianWay;
$pedestrian->addVehicle($bike);
$pedestrian->addVehicle($skateboard);
$pedestrian->addVehicle($car);
var_dump($pedestrian);
$residential = new ResidentialWay;
$residential->addVehicle($bike);
$residential->addVehicle($skateboard);
$residential->addVehicle($car);
var_dump($residential);