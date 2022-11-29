<?php

//----------------------CLASSE GENRE-------------------------------------

Class Genre{
    private array $_film;
    private string $_genre;

    // constructeur

public function __construct(string $_genre){
    $this->_film = [];
    $this->_genre = $_genre;

}
public function __toString(){
    return $this->_genre;
}


//getters et setters
	//getters

public function getFilm(){
	return $this->_film;
}
public function getGenre(){
	return $this->_genre;
}

	//setters
public function setFilm($_film){
	$this->_film = $_film;
}
public function setGenre($_genre){
	$this->_genre = $_genre;
}
// Méthode AddFilm
public function addFilm(Film $film){//fonction qui permet d'ajouter un film
    $this->_film[]=$film;
}
// Méthode afficher genre	
public function afficherGenre(){
	$result = "";
    foreach  ($this->_film as $film){//attention on ne peut utiliser le $this que dans sa propre classe
        $result .=$film->getTitre()." : ".$film->getdateSortie()."<br>";
    }
	return $result;
}


}