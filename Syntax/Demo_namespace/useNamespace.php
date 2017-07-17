<?php
require("HarryPotter.php");
require("Hunter.php");
require("MotherNature/Creature/Animal.php");

use HarryPotter\Animal;

$obj1 = new Hunter\Animal();
$obj1->makeNoise();

$obj2 = new Animal();
$obj2->makeNoise();

$obj3 = new MotherNature\Creature\Animal();
$obj3->makeNoise();

?>