
<?php
require "film.php";
require "personneCinema.php";
require "genreCinema.php";
require "casting.php";

// Réalisateurs
$ridleyScott = new Realisateur("SCOTT","Ridley","Homme","30-11-1937");
$timburton = new Realisateur ("BURTON","Tim","Homme","25-08-1958");
$georgelucas = new Realisateur("LUCAS","George","Homme","14-05-1944");

$genre1 = new Genre("Science Fiction");
$genre2 = new Genre("Action");
$genre3 = new Genre("Fantastique");
$genre4 = new Genre("Comédie");
$genre5 = new Genre("Film Historique");
$genre6 = new Genre("policier");
$genre7 = new Genre("Suspense");
$genre8 = new Genre("Drame");


//films

 $film1 = new Film("BLADE RUNNER",1982,117,$genre1,$ridleyScott);
 $film2 = new Film("BLACK RAIN",1989,125,$genre2,$ridleyScott);
 $film3 = new Film("GLADIATOR",2000,155,$genre5,$ridleyScott);
 $film4 = new Film("BATMAN",1992,126,$genre3,$timburton);
 $film5 = new Film("BEETLEJUICE",1988,92,$genre3,$timburton);
 $film5 = new Film("SLEEPY HOLLOW",1999,106,$genre3,$timburton);
 $film6 = new Film("STAR WARS 4",1977,121,$genre1,$georgelucas);
 $film7 = new Film("AMERICAN GRAFFITI",1973,112,$genre4,$georgelucas);
 $film8 = new Film("STAR WARS 1",1999,133,$genre1,$georgelucas);
 $film9 = new Film("STAR WARS 2",2002,142,$genre1,$georgelucas);
 $film10 = new Film("STAR WARS 3",2005,140,$genre1,$georgelucas);


// TEST D'AFFICHAGE

	//affichage réalisateur

echo "<h3><i>TEST D'AFFICHAGE FILMOGRAPHIE DU REALISATEUR<br></i></h3>";
echo "<h4>$ridleyScott<br></h4>";
echo $ridleyScott->afficherFilm();

echo "<h4>$timburton<br></h4>";
echo $timburton->afficherFilm();

echo "<h4>$georgelucas<br></h4>";
echo $georgelucas->afficherFilm();
echo"<br>";

	//affchage genre de films

echo "<h3><i>TEST D'AFFICHAGE DE FILMS PAR GENRE<br></i></h3>";

echo"<h4> $genre1<br></h4>";
echo $genre1->afficherGenre();
echo"<h4> $genre2<br></h4>";
echo $genre2->afficherGenre();
echo"<h4> $genre3<br></h4>";
echo $genre3->afficherGenre();
echo"<h4> $genre4<br></h4>";
echo $genre4->afficherGenre();
echo"<h4> $genre5<br></h4>";
echo $genre5->afficherGenre();
echo"<h4> $genre6<br></h4>";
echo $genre6->afficherGenre();
echo"<h4> $genre7<br></h4>";
echo $genre7->afficherGenre();
echo"<h4> $genre8<br></h4>";
echo $genre8->afficherGenre();



   //Casting
	//Affichage casting




	echo "<h3><i>TEST D'AFFICHAGE DE CASTINGS<br></i></h3>";
$harisford= new Acteur("FORD","Harrison","Homme","13-07-1942");
$markhamill= new Acteur("HAMILL","Mark","Homme","25-09-1951");

$castinghf1= new Casting($film1,"chasseur de répliquants",$harisford);
$castinghf2= new Casting("Star Wars 4","han Solo",$harisford);
$castinghf3= new Casting("Indiana jones et l'arche d'alliance","Indiana",$harisford);
$castinghf4= new Casting("Working girl","Jack Trainer",$harisford);
$castingmh1= new Casting("Star Wars 4","Luke Skywalker",$markhamill);
$castingmh2= new Casting("Star Wars 5","Luke Skywalker",$markhamill);
$castingmh3= new Casting("Star Wars 6","Luke Skywalker",$markhamill);


echo "<h3>$harisford</h3><br>";
echo $harisford->afficherCasting();
echo"<br>";
echo "<h3>$markhamill</h3><br>";
echo $markhamill->afficherCasting();
























