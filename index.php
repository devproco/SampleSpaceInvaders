<!DOCTYPE html>
<html>
<head>
    <title>Running Space Invaders...</title>
</head>
<body>
<?php

require 'vendor/autoload.php';

$UFO_factory = new UFOSelector;

echo '<textarea rows="20">';

$grunt_ship = $UFO_factory->initShip("UFO");
var_dump($grunt_ship);
var_dump($grunt_ship->outputStatusText());


$rocket_factory = new RocketSelector;

$standard_rocket = $rocket_factory->initShip('Rocket');
var_dump($standard_rocket);
var_dump($standard_rocket->outputStatusText());

echo '</textarea>';
</body>
</html>