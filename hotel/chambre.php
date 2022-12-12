<?php

class Chambre{

	private int $numero;
    private int $_nbreLit;
    private float $_prix;
	private string $_wifi;
    private bool $_disponibilite;
    //private array $_hotel; // *rajout*


	//constructeur

	public function __construct($_numero,$_nbreLit,$_prix,$_wifi){


		$this->_numero = $_numero;
        $this->_nbreLit = $_nbreLit;
        $this->_prix = $_prix;
        $this->_wifi = $_wifi;
        $this->_disponibilite = false;
        //$this->_hotel =[]; // *rajout*
	}


    //toString()

    public function __toString(){
        
        return "Chambre  :".$this->_numero . " ( " .$this->_nbreLit." lits - ".$this->_prix." € ".$this->_wifi." )";
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
    public function getDisponibilite(){
        if($this->_disponibilite){
            $result = "disponible";
        }else 
        {$result = "réservée";
        }
    
        return $result;
    }
    /*public function getHotel(){ // * ajout *
        return $this->_hotel;
    }*/
    

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
    public function setDisponibilite($_disponibilite){
        $this->_disponibilite = $_disponibilite;
    }
    /*public function setHotel($_hotel){ // * ajout *
        $this->_hotel = $_hotel;
    }*/
    // ajouter un hotel

   /*public function addHotel(Hotel $_hotel){ // * ajout *
        $this->_hotel[]=$_hotel;
    }*/
    


}
