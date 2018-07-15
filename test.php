<?php

require_once "./vendor/autoload.php";

$mountainBike = new MountainBike('S', 'rock shox reba', 'FOX');
$roadBike = new RoadBike('56', 'green');
var_dump($mountainBike->spares());
var_dump($roadBike->spares());