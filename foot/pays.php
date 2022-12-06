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

    public function addEquipe(Equipe $_equipe){//fonction qui permet d'ajouter une équipe

       $this->_equipe[]=$_equipe;
       }
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
      //Méthode AddEquipe

        ///
    public function afficherEquipes(){
        $result="";
        foreach ($this->_equipe as $equipe){
            $result .=$equipe->getNomEquipe() . "<br>";

        }
        return $result;
    }
}
