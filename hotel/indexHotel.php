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

$reservation1 = new Reservation($client1,$chambre1,"2021-03-11","2021-03-15");
$reservation2 = new Reservation($client1,$chambre2,"2021-04-01","2021-04-17");

echo "<h4>RESERVATIONS</h4><br>";

echo $reservation1;