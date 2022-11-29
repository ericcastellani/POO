<?php
//---------------------CLASSE CASTING ------------------------------------

Class Casting{
    
    private Film $_film;
    private Role $_role;
	private Acteur $_casting;


    // constructeur

public function __construct(Film $_film,Role $_role,Acteur $_casting){
    $this->_film = $_film;
    $this->_role = $_role;
	$this->_casting = $_casting;
	$this->_casting->addCasting($this);
	$this->_role->addCasting($this);
	//$this->_film->addCasting($this);

}

	//Methode toString()

public function __toString(){
    return $this->_film." / ".$this->_role.$this->_casting." <br> ";
}

	//getters et setters
	//getters
public function getCasting(){
	return $this->_casting;
}
public function getFilm(){
	return $this->_film;
}
public function getRole(){
	return $this->_role;
}
	//setters
public function setCasting($_casting){
	$this->_casting = $_casting;

}
public function setFilm($_film){
	$this->_film = $_film;
}
public function setRole($_role){
	$this->_role = $_role;
}
//methode afficher casting d'un film
/*public function afficherCastingFilm(){
	$result="";
	foreach ($this->_film as $film){
	$result .=$film->getCasting()."<br> ";
}
	return $result;
}*/
	
}





