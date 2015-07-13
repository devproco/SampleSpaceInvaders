<!DOCTYPE html>
<html>
<head>
    <title>Running Space Invaders...</title>
</head>
<body>

<pre><code>
<?php

require 'vendor/autoload.php';

$UFO_factory = new UFOSelector;

$grunt_ship = $UFO_factory->initShip("UFO");
var_dump($grunt_ship);
echo "\n";
var_dump($grunt_ship->outputStatusText());
echo "\n\n";

$rocket_factory = new RocketSelector;

$standard_rocket = $rocket_factory->initShip('Rocket');
var_dump($standard_rocket);
var_dump($standard_rocket->outputStatusText());

?>
</code></pre>

</body>
</html>
