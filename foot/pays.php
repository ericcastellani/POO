<?php

//----------------------CLASSE PAYS-------------------------------------

Class Pays{
    private string $_pays;
    private array $_equipe;

    // constructeur

    public function __construct(string $_pays){
        $this->_pays = $_pays;
        $this->_equipe =[];
        
    }
    //toString()

    public function __toString(){
        return $this->_pays;
    }

    //getters

    public function getEquipe(){
        return $this->_equipe;
    }
    public function getPays(){
        return $this->_pays;
    }
    //setters

    public function setEquipe($_equipe){
        $this->_equipe = $_equipe;
    }
    public function setPays($_pays){
        $this->_pays = $_pays;
    }
     /* Méthode AddEquipe
     public function addEquipe(Equipe $_nomEquipe){//fonction qui permet d'ajouter un joueur
        $this->_nomEquipe[]=$_nomEquipe;
        }*/


}
