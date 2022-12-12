<?php

require "hotel.php";
require "reservation.php";
require "chambre.php";
require "client.php";

$chambre1 = new Chambre(3,2,120.00,"wifi : non");
$chambre2 = new Chambre(4,2,120,"wifi : non");
$chambre3 = new Chambre(17,2,300.00,"wifi : oui");


echo "<h4>CHAMBRES :</h4><br>";
echo "$chambre1<br>";
echo "$chambre2<br>";
echo "$chambre3<br>";

echo"--------------------------------------------------------------------------<br>";

$client1 = new Client("MURMANN","Micka");
$client2 = new Client("GIBELLO","Virgile");

echo "<h4>CLIENTS :</h4><br>";
echo "$client1<br>";
echo "$client2<br>";

echo"--------------------------------------------------------------------------<br>";

$hotel1 = new Hotel("HILTON **** Strasbourg","10 route de la Gare 67000 STRASBOURG",30);
$hotel2 = new Hotel("HOTEL REGENT **** Paris","Paris",30);

$reservation1 = new Reservation($hotel1,$client1,$chambre1,"2021-03-11","2021-03-15");
$reservation2 = new Reservation($hotel1,$client1,$chambre2,"2021-04-01","2021-04-17");
$reservation3 = new Reservation($hotel1,$client2,$chambre3,"2021-01-01","2021-01-02");
$resevation4 = new Reservation($hotel2,$client1,$chambre1,"2021-03-11","2021-03-15");
echo "<h4>RESERVATIONS</h4><br>";

echo "$reservation1<br>";
echo "$reservation2<br>";
echo "$reservation3<br>";

echo"___________________________________________________________________________<br>";

echo"<h4>Reservation de $client1</h4>";
echo $client1->afficherReservation();
echo"<h4>Reservation de $client2</h4>";
echo $client2->afficherReservation();
echo "<br>";


echo"<h4>Reservation de $hotel1</h4>";
echo "<b>".$hotel1->getAdresse()."</b><br>";
echo "<br>";
echo $hotel1->afficherInformationHotel();
echo"<br>";
echo $hotel1->afficherReservationHotel();
echo "<br>";
echo "---------------------------------------------------------------<br>";
echo"<h4>Reservation de $hotel2</h4>";
echo $hotel2->afficherReservationHotel();
echo"<br>";
echo $hotel2->afficherInformationHotel();

