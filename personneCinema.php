
<?php
//----------------------CLASSE PRINCIPALE PERSONNE-------------------------------------

Class Personne{
    protected string $_nom;
    protected string $_prenom;
    protected string $_sexe;
    protected string $_dateNaissance;

    // constructeur

public function __construct($_nom,$_prenom,$_sexe,$_dateNaissance){
    $this->_nom = $_nom;
    $this->_prenom = $_prenom;
    $this->_sexe = $_sexe;
    $this->_dateNaissance = $_dateNaissance;

}

//getters et setters

    //getters
public function getNom(){
    return $this->_nom;
}
public function getPrenom(){
    return $this->_prenom;
}
public function getSexe(){
    return $this->_sexe;
}
public function getDateNaissance(){
    return $this->_dateNaissance;
}

    //setters
public function setNom($_nom){
    $this->_nom = $_nom;
}
public function setPrenom($_prenom){
    $this->_prenom = $_prenom;
}
public function setSexe($_sexe){
    $this->_sexe = $_sexe;
}
public function setDateNaissance($_dateNaissance){
    $this->_dateNaissance = $_dateNaissance;
}



}// FIN DE LA CLASSE PERSONNE

//--------------------CLASSE  EXTENDS REALISATEUR------------------------------------------------------------------------------

Class Realisateur extends Personne{
    private array $_film;


    // constructeur

public function __construct($_nom,$_prenom,$_sexe,$_dateNaissance){
    parent :: __construct($_nom,$_prenom,$_sexe,$_dateNaissance);
	$this->_film = [];
}
// toString

public function __toString(){
    return $this->_nom."  ".$this->_prenom." / ".$this->_sexe." né le  ".$this->_dateNaissance;// à rajouter film après  méthode afficherfilm
}



//getters et setters

    //getters
public function getFilm(){
	return $this->_film;
}



public function setFilm($_film){
    $this-> _film = $_film;


}
// Méthode AddFilm
public function addFilm(Film $film){//fonction qui permet d'ajouter un film
    $this->_film[]=$film;
}	


//                      Méthode afficherFilm

public function afficherFilm(){
	$result = "";
    foreach  ($this->_film as $film){//attention on ne peut utiliser le $this que dans sa propre classe
        $result .= $film->getTitre()." / année sortie : ".$film->getdateSortie()." / ".$film->getDuree()." minutes /   ".$film->getGenre()." <br>";//.$film->getRealisateur()."   <br>";
    }
	return $result;
}

}
//--------------------------------------FIN DE LA CLASSE REALISATEUR------------------------------------------



//--------------------------------------CLASSE EXTENDS ACTEUR--------------------------------------------------

Class Acteur extends Personne{
	private array $_casting;

    // constructeur

public function __construct($_nom,$_prenom,$_sexe,$_dateNaissance){
    parent :: __construct($_nom,$_prenom,$_sexe,$_dateNaissance);
	$this->_casting = [];


}
// toString()

public function __toString(){
    return $this->_nom." : ".$this->_prenom." / ".$this->_sexe."  ".$this->_dateNaissance." ";

}
//getters et setters

    //getters

public function getCasting(){
    return $this->_casting;
}

	//setters

public function setCasting($_casting){
    return $this-> _casting = $_casting;
}



//METHODE addCasting
public function addCasting(Casting $casting){//fonction qui permet d'ajouter un acteur
    $this->_casting[]=$casting;
}
//METHODE afficherCasting

public function afficherCasting(){
	$result = "";
    foreach  ($this->_casting as $casting){
	
        $result .="<b> Film :</b>".$casting->getFilm()."<b> Role :</b>".$casting->getRole()."<br>";
    }
	return $result;
}



}

//---------------------FIN DE LA CLASSE ACTEUR-----------------------------
