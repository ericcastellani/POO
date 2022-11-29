<?php

require "personneCinema.php";
require "casting.php";

 //Casting
	//Affichage casting




	echo "<h3><i>TEST D'AFFICHAGE DE CASTINGS<br></i></h3>";
$harisford= new Acteur("FORD","Harrison","Homme","13-07-1942");
$markhamill= new Acteur("HAMILL","Mark","Homme","25-09-1951");


// $casting1= new Casting("Blade runner","chasseur de répliquant",$harisford);
// $casting2= new Casting("starwars4","han solo",$harisford);
//$casting3= new Casting("indiana jones et l'arche d'alliance","indiana",$harisford);
//$casting4= new Casting($harisford,"pretty woman","Mr ????");
echo "$harisford<br>";

echo $harisford->afficherCasting();
echo "<br>";
echo "$casting1<br>";

echo "$markhamill";
echo $markhamill->afficherCasting();

//affichage role

$role1=new Role($harisford,"han solo");
echo $role1;

