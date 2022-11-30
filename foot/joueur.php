<?php

$now = new DateTime();

class Joueur
{
	private string $_nomJoueur;
    private string $_prenomJoueur;
    private string $_dateNaissance;
	
	//constructeur

	public function __construct($_nomJoueur,$_prenomJoueur,$_dateNaissance){


		$this->_nomJoueur = $_nomJoueur;
        $this->_prenomJoueur = $_prenomJoueur;
        $this->_dateNaissance = $_dateNaissance;

	}
    //toString()

    public function __toString(){
        return $this->_nomJoueur . "  " . $this->_prenomJoueur . " / " . $this->_dateNaissance ." <br> ";
	}

    //getters 

    public function getNomJoueur(){
        return $this->_nomJoueur;
    }

    public function getPrenomJoueur(){
        return $this->_prenomJoeur;
    }

    public function getDateNaissance(){
        return $this->_dateNaissance;
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

    public function calculerAge(){
        

    }


}


  