<?php

//----------------------CLASSE ROLE-------------------------------------

Class Role{
	private string $_role;
    //private array $_film;
	private array $_casting;


    // constructeur

public function __construct(string $_role){
    //$this->_film = [];
	 $this->_role = $_role;
	$this->_casting= [];
    

}
public function __toString(){
    return $this->_role;
}


//getters et setters
	//getters

/*public function getFilm(){
	return $this->_film;
}*/
public function getCasting(){
	return $this->_casting;
}
public function getRole(){
	return $this->_role;
}

	//setters
/*public function setFilm($_film){
	$this->_film = $_film;
}*/
public function setCasting($_casting){
	$this->_casting = $_casting;
}
public function setRole($_role){
	$this->_role = $_role;
}
// Méthode AddActeur
public function addCasting(Casting $casting){//fonction qui permet d'ajouter un casting
    $this->_casting[]=$casting;
}
// Méthode afficher Role	
public function afficherActeur(){
	$result = "";
    foreach  ($this->_casting as $casting){//attention on ne peut utiliser le $this que dans sa propre classe
        $result .=$casting->getFilm()." Acteur : ".$casting->getCasting()."<br>";
    }
	return $result;
}



}