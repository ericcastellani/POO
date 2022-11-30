<?php

require "joueur.php";
require "Equipe.php";

$kylianmbappe = new Joueur("MBAPPE","Kylian","1998-12-20");
$oliviergiroud = new Joueur("GIROUD","Olivier","1986-09-30");
echo"<br>";
echo "<b>$kylianmbappe</b>". $kylianmbappe->calculerAge();
echo"<br>";
echo "<b>$oliviergiroud</b>".$oliviergiroud->calculerAge();

