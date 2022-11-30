<?php

require "joueur.php";
require "Equipe.php";

//Equipe de France

$kylianmbappe = new Joueur("MBAPPE","Kylian","1998-12-20");
$oliviergiroud = new Joueur("GIROUD","Olivier","1986-09-30");
$karimbenzema = new Joueur("BENZEMA","Karim","1987-12-19");
$hugolloris = new Joueur("LLORIS","Hugo","1986-12-26");
$stevemandanda = new Joueur("MANDANDA","Steve","1985-03-28");
$antoinegriezmann = new Joueur("GRIEZMANN","Antoine","1991-03-21");
$alphonseareola = new Joueur("AREOLA","Alphonse","1993-02-27");
$raphaelvarane = new Joueur("VARANE","Raphael","1993-04-25");
$jordanveretout = new Joueur("VERETOUT","Jordan","1993-03-01");
$adrienrabiot = new Joueur("RABIOT","Adrien","1995-04-03");
$lucashernandez = new Joueur("HERNANDEZ","Lucas","1996-02-14");
$kingsleycoman = new Joueur("COMAN","Kingsley","1996-06-13");






//Equipe d'Espagne

$aymericlaporte = new Joueur("LAPORTE","Aymeric","1994-05-27");
$ansufati = new Joueur("FATI","Ansu","2002-10-31");
$alvaromorata = new Joueur("MORATA","Alvaro","1992-10-23");
$abelruiz = new Joueur("RUIZ","Morata","2001-01-28");
$ferrantorres = new Joueur("TORRES","Ferran","2000-02-29");
$isco = new Joueur("ISCO","","1992-04-21");
$koke = new Joueur("KOKE","","1992-01-08");
$hernandezrodrigo = new Joueur("RODRIGO","Hernandez","1996-06-22");
$danielolmo = new Joueur("OLMO","Daniel","1998-05-07");
$ericgarcia = new Joueur("GARCIA","Eric","2001-01-09");






//test affichage joueurs



echo"<br>";
echo "<b>$kylianmbappe</b>". $kylianmbappe->calculerAge();
echo"<br>";
echo "<b>$oliviergiroud</b>".$oliviergiroud->calculerAge();
echo"<br>";




echo "<b>$aymericlaporte</b>".$aymericlaporte->calculerAge();
echo"<br>";
echo "<b>$ansufati</b>".$ansufati->calculerAge();
echo"<br>";
echo "<b>$alvaromorata</b>".$alvaromorata->calculerAge();
echo"<br>";
echo "<b>$abelruiz</b>".$abelruiz->calculerAge();
echo"<br>";
echo "<b>$ferrantorres</b>".$ferrantorres->calculerAge();
echo"<br>";
echo "<b>$isco</b>".$isco->calculerAge();
echo"<br>";