<?php


class Joueur
{
	private string $_nomJoueur;
    private string $_prenomJoueur;
    private DateTime $_dateNaissance;
	private Nationalite $_nationalite;
    private Carriere $_club;

	//constructeur

	public function __construct($_nomJoueur,$_prenomJoueur,$_dateNaissance, Nationalite $_nationalite,Carriere $_club){


		$this->_nomJoueur = $_nomJoueur;
        $this->_prenomJoueur = $_prenomJoueur;
        $this->_dateNaissance = new DateTime($_dateNaissance);
        $this->_nationalite = $_nationalite;
        $this->_nationalite->addJoueur($this);
        $this->_club = $_club;
        $this->_club->addJoueur($this);
	}
    //toString()

    public function __toString(){
        
        return $this->_nomJoueur . "  " .$this->_prenomJoueur." ".$this->calculerAge().$this->_club;
	}//$this->_prenomJoueur." Nationalité :  ".$this->_nationalite." "

    //getters 

    public function getNomJoueur(){
        return $this->_nomJoueur;
    }

    public function getPrenomJoueur(){
        return $this->_prenomJoueur;
    }

    public function getDateNaissance(){
        return $this->_dateNaissance;
    }
    public function getNationalite(){
        return $this->_nationalite;
    }

    //setters

    public function setNomJoueur($_nomJoueur){
        $this->_nomJoeur = $_nomJoueur;
    }

    public function setPrenomJoueur($_prenomJoueur){
        $this->_prenomJoeur = $_prenomJoueur;
    }

    public function setDateNaissance($_dateNaissance){
        $this->_dateNaissance = $_dateNaissance;

    }
    public function setNationalite($_nationalite){
        $this->_nationalite = $_nationalite;
    }

    public function calculerAge(){
        $now = new DateTime();
        $age = $this->_dateNaissance->diff($now);
        return $age ->format("%Y ans");

    }


}


  