<?php
//---------------------CLASSE CASTING ------------------------------------

Class Casting{
    
    private string $_film;
    private string $_role;
	private Acteur $_casting;


    // constructeur

public function __construct($_film,$_role,Acteur $_casting){
    $this->_film = $_film;
    $this->_role = $_role;
	$this->_casting = $_casting;
	$this->_casting->addCasting($this);

}

	//Methode toString()

public function __toString(){
    return $this->_film." / ".$this->_role.$this->_casting." <br> ";
}

	//getters et setters
	//getters
public function getCasting(){
	$this->_casting;
}
public function getFilm(){
	$this->_film;
}
public function getRole(){
	$this->_role;
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

	
}





