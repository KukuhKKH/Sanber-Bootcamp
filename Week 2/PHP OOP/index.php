<?php

require 'Animal.php';
require 'Frog.php';
require 'Ape.php';

$sheep = new Animal('Shaun');

echo $sheep->getName();
echo "<br>";
echo $sheep->getLegs();
echo "<br>";
echo $sheep->getColdBlooded();
echo "<br>";


$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"
echo "<br>";
$kodok = new Frog("buduk");
$kodok->jump(); // "hop hop"