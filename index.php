<!DOCTYPE html>
<html>
<head>
    <title>Running Space Invaders...</title>
    <style type="text/css">
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            margin: 20px;
            padding: 30px;
            border: 1px solid black;
        }
    </style>
</head>
<body>

<h1>Space Invaders Sample</h1>
<div class="note">
    The following output describes objects generated from a sample game: Space Invaders!
</div>

<pre><code>
<?php

require 'vendor/autoload.php';

$UFO_factory = new UFOSelector;

$grunt_ship = $UFO_factory->initShip("UFO");
var_dump($grunt_ship);
echo "\n";
var_dump($grunt_ship->outputStatusText());
echo "\n\n\n";

$rocket_factory = new RocketSelector;

$standard_rocket = $rocket_factory->initShip('Rocket');
var_dump($standard_rocket);
echo "\n";
var_dump($standard_rocket->outputStatusText());

?>
</code></pre>


</body>
</html>