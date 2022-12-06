<?php

//----------------------CLASSE CARRIERE-------------------------------------

Class Carriere{
    private Joueur $_nomJoueur;// on aurait pu l'appeler $_joueur par exemple
    private  Equipe $_nomEquipe;
    private int $_annee;
    

    // constructeur

    public function __construct(Joueur $_nomJoueur,Equipe $_nomEquipe,$_annee){
        $this->_nomJoueur = $_nomJoueur;
        $this->_nomJoueur->addCarriere($this);
        $this->_nomEquipe = $_nomEquipe;
        $this->_annee = $_annee;
    }
    //toString()

    public function __toString(){
        return $this->_nomJoueur.$this->_nomEquipe." ".$this->_annee." ";
    }
    //getters

    public function getNomJoueur(){
        return $this->_nomJoueur;
    }
    public function getNomEquipe(){
        return $this->_nomEquipe;
    }
    public function getAnnee(){
        return $this->_annee;
    }

    //setters
    public function setNomJoueur($_nomJoueur){
        $this->_nomJoueur = $_nomJoueur;
    }
    Public function setNomEquipe($_nomEquipe){
        $this->_nomEquipe = $_nomEquipe;
    }
    public function setAnnee($_annee){
        $this->_annee = $_annee;
    }

     //Méthode addJoueur
    public function addJoueur(Joueur $_nomJoueur){//fonction qui permet d'ajouter un joueur
        $this->_nomJoueur[]=$_nomJoueur;
        }



}