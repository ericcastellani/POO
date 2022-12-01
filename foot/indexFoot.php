<?php

require "joueur.php";
require "Equipe.php";
require "nationalite.php";
require "pays.php";


//Equipe de France



//Affichage nationalite

$nationalite1 = new Nationalite("FRANCAISE");
$nationalite2 = new Nationalite("ESPAGNOLE");


$kylianmbappe = new Joueur("MBAPPE","Kylian","1998-12-20",$nationalite1);
$oliviergiroud = new Joueur("GIROUD","Olivier","1986-09-30",$nationalite1);
$karimbenzema = new Joueur("BENZEMA","Karim","1987-12-19",$nationalite1);
$hugolloris = new Joueur("LLORIS","Hugo","1986-12-26",$nationalite1);
$stevemandanda = new Joueur("MANDANDA","Steve","1985-03-28",$nationalite1);
$antoinegriezmann = new Joueur("GRIEZMANN","Antoine","1991-03-21",$nationalite1);
$alphonseareola = new Joueur("AREOLA","Alphonse","1993-02-27",$nationalite1);
$raphaelvarane = new Joueur("VARANE","Raphael","1993-04-25",$nationalite1);
$jordanveretout = new Joueur("VERETOUT","Jordan","1993-03-01",$nationalite1);
$adrienrabiot = new Joueur("RABIOT","Adrien","1995-04-03",$nationalite1);
$lucashernandez = new Joueur("HERNANDEZ","Lucas","1996-02-14",$nationalite1);
$kingsleycoman = new Joueur("COMAN","Kingsley","1996-06-13",$nationalite1);

//Equipe d'Espagne

$aymericlaporte = new Joueur("LAPORTE","Aymeric","1994-05-27",$nationalite2);
$ansufati = new Joueur("FATI","Ansu","2002-10-31",$nationalite2);
$alvaromorata = new Joueur("MORATA","Alvaro","1992-10-23",$nationalite2);
$abelruiz = new Joueur("RUIZ","Morata","2001-01-28",$nationalite2);
$ferrantorres = new Joueur("TORRES","Ferran","2000-02-29",$nationalite2);
$isco = new Joueur("ISCO","","1992-04-21",$nationalite2);
$koke = new Joueur("KOKE","","1992-01-08",$nationalite2);
$hernandezrodrigo = new Joueur("RODRIGO","Hernandez","1996-06-22",$nationalite2);
$danielolmo = new Joueur("OLMO","Daniel","1998-05-07",$nationalite2);
$ericgarcia = new Joueur("GARCIA","Eric","2001-01-09",$nationalite2);

//test affichage joueurs
echo"<br>";
echo "<b>$kylianmbappe</b>";
echo"<br>";
echo "<b>$oliviergiroud</b>";
echo"<br><br>";

//test affichage nationalité

echo "<b>NATIONALITE  : $nationalite1</b><br>";
echo "<br>";
echo $nationalite1->afficherNationalite();
echo"<br>";
echo "<b>NATIONALITE  : $nationalite2</b><br>";
echo "<br>";
echo $nationalite2->afficherNationalite();

