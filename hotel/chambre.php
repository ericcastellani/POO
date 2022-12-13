<?php

class Chambre{

	private int $numero;
    private int $_nbreLit;
    private float $_prix;
	private string $_wifi;
    private bool $_disponibilite;
    private Hotel $_hotel; // *rajout*


	//constructeur

	public function __construct($_numero,$_nbreLit,$_prix,$_wifi, Hotel $_hotel){


		$this->_numero = $_numero;
        $this->_nbreLit = $_nbreLit;
        $this->_prix = $_prix;
        $this->_wifi = $_wifi;
        $this->_disponibilite = true;
        $this->_hotel = $_hotel; // *rajout*
        $this->_hotel->addChambre($this);
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
        if ($this->_wifi =="wifi : oui"){
            $this->_wifi = "📶";}
            else {$this->_wifi = " --- ";}
        return $this->_wifi;
    }
    public function getDisponibilite(){
        if($this->_disponibilite){
            $result = "<span style= 'background: #8ed89d; color : white '> disponible</span>";
        }else 
        {$result = "<span style= 'background: #d774a9; color : white '> réservée </span>";
        }
    
        return $result;
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
    public function setDisponibilite($_disponibilite){
        $this->_disponibilite = $_disponibilite;
    }
    public function addReservation()// changement de statut de la chambre si la chambre est réservée
	{
		$this->_disponibilite = false;
	}
    
    //"<span style= 'background: #8ed89d; color : white '> ". $compteur." RESERVATION(S) </span>" ;
    
    


}
