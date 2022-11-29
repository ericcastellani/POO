
<?php
require "film.php";
require "personneCinema.php";
require "genreCinema.php";
require "casting.php";
require "role.php";

// Réalisateurs
$ridleyScott = new Realisateur("SCOTT","Ridley","Homme","30-11-1937");
$timburton = new Realisateur ("BURTON","Tim","Homme","25-08-1958");
$georgelucas = new Realisateur("LUCAS","George","Homme","14-05-1944");
$mikenichols = new Realisateur("NICHOLS","Mike","Homme","06-11-1931");

$genre1 = new Genre("Science Fiction");
$genre2 = new Genre("Action");
$genre3 = new Genre("Fantastique");
$genre4 = new Genre("Comédie");
$genre5 = new Genre("Film Historique");
$genre6 = new Genre("policier");
$genre7 = new Genre("Suspense");
$genre8 = new Genre("Drame");
$genre9 = new Genre("Aventure");


//films

 $film1 = new Film("BLADE RUNNER",1982,117,$genre1,$ridleyScott);
 $film2 = new Film("BLACK RAIN",1989,125,$genre2,$ridleyScott);
 $film3 = new Film("GLADIATOR",2000,155,$genre5,$ridleyScott);
 $film4 = new Film("BATMAN",1992,126,$genre3,$timburton);
 $film5 = new Film("BEETLEJUICE",1988,92,$genre3,$timburton);
 $film6 = new Film("SLEEPY HOLLOW",1999,106,$genre3,$timburton);
 $film7 = new Film("STAR WARS 4",1977,121,$genre1,$georgelucas);
 $film8 = new Film("AMERICAN GRAFFITI",1973,112,$genre4,$georgelucas);
 $film9 = new Film("STAR WARS 2",2002,142,$genre1,$georgelucas);
 $film10 = new Film("STAR WARS 3",2005,140,$genre1,$georgelucas);
 $film11 = new Film("INDIANA JONES",1981,115,$genre9,$georgelucas);
 $film12 = new Film("WORKING GIRL",1988,115,$genre8,$mikenichols);
 $film13 = new Film("STAR WARS 5",1980,127,$genre1,$georgelucas);
 $film14 = new Film("STAR WARS 6",1983,134,$genre1,$georgelucas);
 $film15 = new Film("BATMAN 2",1992,126,$genre3,$timburton);
 $film16 = new Film("STAR WARS 1",1999,136,$genre1,$georgelucas);
 


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
echo "<h4>$mikenichols<br></h4>";
echo $mikenichols->afficherFilm();
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
echo"<h4> $genre9<br></h4>";
echo $genre9->afficherGenre();


   //Casting
	//Affichage casting




echo "<h3><i>TEST D'AFFICHAGE DE CASTINGS<br></i></h3>";

$harisford= new Acteur("FORD","Harrison","Homme","13-07-1942");
$markhamill= new Acteur("HAMILL","Mark","Homme","25-09-1951");
$jacoblloyd= new Acteur("LLOYD","Jacob Christopher","Homme","05-03-1989");
$haydenchri= new Acteur("CHRISTENSEN","Hayden","Homme","19-04-1981");
$carriefish= new Acteur("FISHER","Carrie","Femme","21-10-1956");


$role1=new Role("han solo");
$role2=new Role("Luke Skywalker");
$role3=new Role("Princesse Leia");
$role4=new Role("Chasseur de répliquants");
$role5=new Role("Professeur jones");
$role6=new Role("Jack Trainer");
$role7=new Role("Bruce Waynes alias Bat Man");
$role8=new Role("DARK VADOR alias Anakin Skywalker");
$role9=new Role("Princess Leia");

$castinghf1= new Casting($film1,$role4,$harisford);
$castinghf2= new Casting($film7,$role1,$harisford);
$castinghf3= new Casting($film11,$role5,$harisford);
$castinghf4= new Casting($film12,$role6,$harisford);
$castingmh1= new Casting($film7,$role2,$markhamill);
$castingmh2= new Casting($film10,$role2,$markhamill);
$castingmh3= new Casting($film13,$role2,$markhamill);
$castingmh4= new Casting($film14,$role2,$markhamill);
$castingjl1= new Casting($film16,$role8,$jacoblloyd);
$castinghc1= new Casting($film16,$role8,$haydenchri);
$castingcf1= new Casting($film7,$role9,$carriefish);

echo "<h3>$harisford</h3><br>";
echo $harisford->afficherCasting();
echo"<br>";
echo "<h3>$markhamill</h3><br>";
echo $markhamill->afficherCasting();


//affichage role

echo "<h3><i>TEST D'AFFICHAGE DE ROLES<br></i></h3>";


echo "<h3>$role2</h3><br>";
echo $role2-> afficherActeur();
echo"<br>";
echo "<h3>$role8</h3><br>";
echo $role8->afficherActeur();

//affichage casting par film

echo "<h3><i>CASTING DE FILM<br></i></h3>";
echo "<b>$film7</b><br>";
echo $film7->afficherCastingFilm();


















