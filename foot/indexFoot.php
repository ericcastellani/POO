<?php

require "joueur.php";
require "Equipe.php";
require "nationalite.php";
require "pays.php";
require "carriere.php";


//Equipe de France



//Affichage nationalite

$nationalite1 = new Nationalite("FRANCAIS");
$nationalite2 = new Nationalite("ESPAGNOL");

//$club1 = new Carriere($kylianmbappe,"FC BARCELONE",2003);
//$club2 = new Carriere("PSG", 2021);


$kylianmbappe = new Joueur("MBAPPE","Kylian","1998-12-20",$nationalite1);
//$kylianmbappe2=new Joueur("MBAPPE","Kylian","1998-12-20",$nationalite1);
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
//$club1 = new Carriere($kylianmbappe,"FC BARCELONE",2003);



//$club2 = new Carriere($kylianmbappe,"PSG", 2021);
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

echo"<h4>AFFICHAGE DES NATIONALITES</h4>";

echo "<b>NATIONALITE  : $nationalite1</b><br>";
echo "<br>";
echo $nationalite1->afficherNationalite();
echo"<br>";
echo "<b>NATIONALITE  : $nationalite2</b><br>";
echo "<br>";
echo $nationalite2->afficherNationalite();

//test affichage clubs


/*echo"<br>";

echo "<b>$club1</b><br>";
echo $club1->afficherCarriere();
echo"<br>";
echo "<b>$club2</b><br>";
echo $club2->afficherCarriere();*/

//test affichage  pays
echo"<br>";
echo"<b>AFFICHAGE PAYS</b><br>";
echo"<br>";
 $pays1 = new Pays("ESPAGNE");
 $pays2 = new Pays("FRANCE");
 echo"<br>";
 echo "$pays1<br>";
 echo "$pays2<br>";
 echo "<br>";

//test affichage équipe

$equipe1 = new Equipe("PSG",$pays2);
$equipe2 = new Equipe("FC BARCELONE",$pays1);
$equipe3 = new Equipe("REAL MADRID",$pays1);
$equipe4 = new Equipe("OLYMPIQUE DE MARSEILLE",$pays2);
$equipe5 = new Equipe("AS MONACO",$pays2);
$equipe6 = new Equipe("VALENCE CF",$pays1);
$equipe7 = new Equipe("SEVILLE FC",$pays1);

$carriere1= new Carriere($kylianmbappe,$equipe1,2021);
$carriere2 = new Carriere($isco,$equipe6,2010);
$carriere3 = new Carriere($isco,$equipe3,2013);
$carriere4 = new carriere($kylianmbappe,$equipe5,2015);
$carriere5 = new Carriere($isco,$equipe7,2022);


echo "<b>AFFICHAGE EQUIPES</b><br>";

echo "$equipe1<br>";
echo "$equipe2<br>";
echo "$equipe3<br>";
echo "$equipe4<br>";

//$club1 = new Carriere($kylianmbappe,$equipe1,2003);
//$club2 = new Carriere($kylianmbappe,$equipe2, 2021);

echo "-----------------------------------------<br>";
echo "<b>AFFICHAGE CARRIERES</b><br>";
echo"<br>";
echo "<b>$kylianmbappe</b><br>";
echo $kylianmbappe->afficherCarriere();
echo"<br>";
echo "<b>$isco</b><br>";
echo $isco->afficherCarriere();

echo "-----------------------------------------<br>";
echo "<b>AFFICHAGE EQUIPES PAR PAYS</b><br>";
echo"<br>";
echo "<b>$pays2</b><br>";
echo $pays2->afficherEquipes();
echo"<br>";
echo"<b>$pays1</b><br>";
echo $pays1->afficherEquipes();
echo "-----------------------------------------<br>";
echo "<b>AFFICHAGE JOUEURS PAR EQUIPE</b><br>";

