<?php

//----------------------CLASSE CARRIERE-------------------------------------

Class Carriere{
    private array $_nomJoueur;// on aurait pu l'appeler $_joueur par exemple
    private string $_club;
    private int $_annee;
    

    // constructeur

    public function __construct(string $_club,$_annee){
        $this->_nomJoueur = [];
        $this->_club = $_club;
        $this->_annee = $_annee;
    }
    //toString()

    public function __toString(){
        return $this->_club." ".$this->_annee." ";
    }
    //getters

    public function getNomJoueur(){
        return $this->_nomJoueur;
    }
    public function getClub(){
        return $this->_club;
    }
    public function getAnnee(){
        return $this->_annee;
    }

    //setters
    public function setNomJoueur($_nomJoueur){
        $this->_nomJoueur = $_nomJoueur;
    }
    Public function setClub($_club){
        $this->_club = $_club;
    }
    public function setAnnee($_annee){
        $this->_annee = $_annee;
    }

    // Méthode AddJoeur
    public function addJoueur(Joueur $_nomJoueur){//fonction qui permet d'ajouter un joueur
        $this->_nomJoueur[]=$_nomJoueur;
        }
}