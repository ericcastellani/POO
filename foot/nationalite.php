<?php

//----------------------CLASSE NATIONALITE-------------------------------------

Class Nationalite{
    private array $_nomJoueur;// on aurait pu l'appeler $joueur par exemple
    private string $_nationalite;

    // constructeur

    public function __construct(string $_nationalite){
        $this->_nomJoueur = [];
        $this->_nationalite = $_nationalite;
    }
    //toString()

    public function __toString(){
        return $this->_nationalite;
    }
    // getters

    public function getNomJoueur(){
        return $this->_joueur;
    }
    public function getNationalite(){
        return $this->_nationalite;
    }
    //setters

    public function setNomJoueur($_nomJoueur){
        $this->_nomJoueur = $_nomJoueur;
    }
    public function setNationalite($_nationalite){
        $this->_nationalite = $_nationalite;
    }
    // Méthode AddJoeur
    public function addJoueur(Joueur $_nomJoueur){//fonction qui permet d'ajouter un joueur
    $this->_nomJoueur[]=$_nomJoueur;
    }
    // Méthode afficherNationalite

    public function afficherNationalite(){
        $result = "";
        foreach  ($this->_nomJoueur as $nomJoueur){//attention on ne peut utiliser le $this que dans sa propre classe
            $result .=$nomJoueur."  "."<br>";// on n'est pas obligé d'utiliser la fonction $nomJoueur->getNom() grâce à la fonction toString()
        }
        return $result;
    }






}