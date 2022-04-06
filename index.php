<?php

require_once 'vendor/autoload.php';

$app = new Sites\cwiczenie5\Application;
$app->run();

$generator = \Nubs\RandomNameGenerator\All::create();

for($i = 0; $i <200; $i++){
    echo $generator->getName(). "<br>";
}
