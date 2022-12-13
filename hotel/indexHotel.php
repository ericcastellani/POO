<?php

require "hotel.php";
require "reservation.php";
require "chambre.php";
require "client.php";




$client1 = new Client("MURMANN","Micka");
$client2 = new Client("GIBELLO","Virgile");
$client3 =new Client ("BIDULE","Machin");

echo"--------------------------------------------------------------------------<br>";
echo "<h4>CLIENTS :</h4><br>";
echo "$client1<br>";
echo "$client2<br>";
echo "$client3<br>";
echo"--------------------------------------------------------------------------<br>";

$hotel1 = new Hotel("HILTON **** Strasbourg","10 route de la Gare 67000 STRASBOURG",30);
$hotel2 = new Hotel("HOTEL REGENT **** Paris","Paris",25);
$hotel3 = new Hotel("HOTEL TARTAMPION Strasbourg","10 rue Schmilblic 67000 STRASBOURG",10);


$chambre1 = new Chambre(1,2,120.00,"wifi : non",$hotel1);
$chambre2 = new Chambre(2,2,120,"wifi : non",$hotel1);
$chambre3 = new Chambre(3,2,120,"wifi : non",$hotel1);
$chambre4 = new Chambre(4,2,120,"wifi : non",$hotel1);
$chambre5 = new Chambre(5,2,120,"wifi : non",$hotel1);
$chambre6 = new Chambre(6,2,120,"wifi : non",$hotel1);
$chambre7 = new Chambre(7,2,120,"wifi : non",$hotel1);
$chambre8 = new Chambre(8,2,120,"wifi : non",$hotel1);
$chambre9 = new Chambre(9,2,120,"wifi : non",$hotel1);
$chambre10 = new Chambre(10,2,120,"wifi : non",$hotel1);
$chambre11 = new Chambre(11,2,120,"wifi : non",$hotel1);
$chambre12 = new Chambre(12,2,120,"wifi : non",$hotel1);
$chambre13 = new Chambre(13,2,120,"wifi : non",$hotel1);
$chambre14 = new Chambre(14,2,120,"wifi : non",$hotel1);
$chambre15 = new Chambre(15,2,120,"wifi : non",$hotel1);
$chambre16 = new Chambre(16,2,300,"wifi : oui",$hotel1);
$chambre17 = new Chambre(17,2,300,"wifi : oui",$hotel1);
$chambre18 = new Chambre(18,2,300,"wifi : oui",$hotel1);
$chambre19 = new Chambre(19,2,300,"wifi : oui",$hotel1);
$chambre20 = new Chambre(20,2,300,"wifi : oui",$hotel1);
$chambre21 = new Chambre(21,2,300,"wifi : oui",$hotel1);
$chambre22 = new Chambre(22,2,300,"wifi : oui",$hotel1);
$chambre23 = new Chambre(23,2,300,"wifi : oui",$hotel1);
$chambre24 = new Chambre(24,2,300,"wifi : oui",$hotel1);
$chambre25 = new Chambre(25,2,300,"wifi : oui",$hotel1);
$chambre26 = new Chambre(26,2,300,"wifi : oui",$hotel1);
$chambre27 = new Chambre(27,2,300,"wifi : oui",$hotel1);
$chambre28 = new Chambre(28,2,300,"wifi : oui",$hotel1);
$chambre29 = new Chambre(29,2,300,"wifi : oui",$hotel1);
$chambre30 = new Chambre(30,2,300,"wifi : oui",$hotel1);
$chambre31 = new Chambre(1,2,120,"wifi : non",$hotel3);


echo "<h4>CHAMBRES :</h4><br>";
echo "$chambre1<br>";
echo "$chambre2<br>";
echo "$chambre3<br>";

$reservation1 = new Reservation($hotel1,$client1,$chambre3,"2021-03-11","2021-03-15");
$reservation2 = new Reservation($hotel1,$client1,$chambre4,"2021-04-01","2021-04-17");
$reservation3 = new Reservation($hotel1,$client2,$chambre17,"2021-01-01","2021-01-02");
$reservation4 = new Reservation($hotel3,$client3,$chambre31,"2021-03-11","2021-03-15");
echo"--------------------------------------------------------------------------<br>";
echo "<h4>RESERVATIONS</h4><br>";
echo "$reservation1<br>";
echo "$reservation2<br>";
echo "$reservation3<br>";
echo "$reservation4<br>";

echo"_______________________________________________________________________________________________________________<br>";

echo"<h4>Reservation de $client1</h4>";
echo $client1->afficherReservation();
echo"<h4>Reservation de $client2</h4>";
echo $client2->afficherReservation();
echo "<br>";
echo"<h4>Reservation de $client3</h4>";
echo $client3->afficherReservation();
echo "<br>";
echo"_______________________________________________________________________________________________________________<br>";

echo"<h4>Reservation de $hotel1</h4>";
//echo "<b>".$hotel1->getAdresse()."</b><br>";
echo "<br>";
echo $hotel1->afficherInformationHotel();
echo"<br>";
echo $hotel1->afficherReservationHotel();
echo "<br>";
echo "---------------------------------------------------------------<br>";
echo"<h4>Reservation de $hotel2</h4>";
echo"<br>";
echo $hotel2->afficherInformationHotel()."<br>";
echo $hotel2->afficherReservationHotel()."<br>";
echo"-----------------------------------------------------------------<br>";
echo"<h4>Reservation de $hotel3</h4>";
echo"<br>";
echo $hotel3->afficherInformationHotel()."<br>";
echo $hotel3->afficherReservationHotel()."<br>";

echo"_______________________________________________________________________________________________________________<br>";

echo $hotel1->afficherStatutChambre();
echo $hotel3-> afficherStatutChambre();

echo "<br>";
