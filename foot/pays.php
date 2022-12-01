<?php

//----------------------CLASSE PAYS-------------------------------------

Class Pays{
    private array $_equipe;
    private string $_pays;

    // constructeur

    public function __cotruct(string $_pays){
        $this->_equipe = [];
        $this->_pays = $_pays;
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



}
