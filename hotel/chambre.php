<?php

class Chambre{

	private int $numero;
    private int $_nbreLit;
    private float $_prix;
	private string $_wifi;
    private DateTime $_dateEntree;
    private DateTime $_dateSortie;


	//constructeur

	public function __construct($_numero,$_nbreLit,$_prix,$_wifi,$_dateEntree,$_dateSortie){


		$this->_numero = $_numero;
        $this->_nbreLit = $_nbreLit;
        $this->_prix = $_prix;
        $this->_wifi = $_wifi;
        $this->_dateEntree = new DateTime ($_dateEntree); // voir si à ne pas mettre en classe Client
        $this->_dateSortie = new DateTime ($_dateSortie);// voir si à ne pas mettre en Classe Client
        
	}
    //toString()

    public function __toString(){
        
        return $this->_numero . "  " .$this->_nbreLit." ".$this->_prix." ".$this->_wifi." ".$this->_dateEntree." ".$this->_dateSortie;
    }    
    
    //getters 

    public function getNumero(){
        return $this->_numero;
    }
    public function getNbreLit(){
        return $this->_nbreLit;
    }

    public function getPrix(){
        return $this->_prix;
    }

    public function getWifi(){
        return $this->_wifi;
    }
    public function getDateEntree(){
        return $this->_dateEntree;
    }
    public function getDateSortie(){
        return $this->_dateSortie;
    }

    //setters

    public function setNumeo($_numero){
        $this->_numero = $_numero;
    }
    public function setNbreLit($_nbreLit){
        $this->_nbreLit = $_nbreLit;
    }
    public function setPrix($_prix){
        $this->_prix = $_prix;
    }

    public function setWifi($_wifi){
        $this->_wifi = $_wifi;
    }

    public function setDateEntree($_dateEntree){
        $this->_dateEntree = $_dateEntree;

    }
    public function setDateSortie($_dateSortie){
        $this->_dateSortie = $_dateSortie;
    
    }


}
