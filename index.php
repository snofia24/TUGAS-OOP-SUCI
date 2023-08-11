<?php 
require_once 'animal.php';
require 'frog.php';
require 'ape.php';

$sheep = new Animal("shaun");

echo "Name : ". $sheep->name . "<br>" ; // "shaun"
echo "Legs : ". $sheep->legs; // 4
echo "Cold Blooded : ". $sheep->cold_blooded; // "no"
echo "<br>";

$kodok = new Frog("buduk");
echo "Name : " . $kodok->name . "<br>" ;
echo "Legs : " . $kodok->legs;
echo "Cold Blooded : " . $kodok->cold_blooded; 
$kodok->jump() ; // "hop hop"
echo "<br>";
echo "<br>";

$sungokong = new Ape("kera sakti");
echo "Name : " . $sungokong->name. "<br>" ;
echo "Legs : " . $sungokong->legs;
echo "Cold Blooded : " . $sungokong->cold_blooded;
$sungokong->yell() ; // "Auooo"
echo "<br>";
echo "<br>";
?>