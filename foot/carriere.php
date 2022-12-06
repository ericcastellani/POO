<?php

//----------------------CLASSE CARRIERE-------------------------------------

Class Carriere{
    private Joueur $_nomJoueur;// on aurait pu l'appeler $_joueur par exemple
    private  Equipe $_equipe;
    private int $_annee;
    

    // constructeur

    public function __construct(Joueur $_nomJoueur,Equipe $_equipe,$_annee){
        $this->_nomJoueur = $_nomJoueur;
        $this->_nomJoueur->addCarriere($this);
        $this->_equipe = $_equipe;
        $this->_equipe->addCarriere($this);
        $this->_annee = $_annee;
    }
    //toString()

    public function __toString(){
        return $this->_nomJoueur.$this->_equipe." ".$this->_annee." ";
    }
    //getters

    public function getNomJoueur(){
        return $this->_nomJoueur;
    }
    public function getequipe(){
        return $this->_equipe;
    }
    public function getAnnee(){
        return $this->_annee;
    }

    //setters
    public function setNomJoueur($_nomJoueur){
        $this->_nomJoueur = $_nomJoueur;
    }
    Public function setequipe($_equipe){
        $this->_equipe = $_equipe;
    }
    public function setAnnee($_annee){
        $this->_annee = $_annee;
    }

     //Méthode addJoueur
    public function addJoueur(Joueur $_nomJoueur){//fonction qui permet d'ajouter un joueur
        $this->_nomJoueur[]=$_nomJoueur;
    }
    
    

}