<?php

class Hotel{

	private string $_nom;
    private string $_adresse;
    private int $_nbreChambre;
	private array $_reservation;
    
    
	//constructeur

	public function __construct($_nom,$_adresse,$_nbreChambre){


		$this->_nom = $_nom;
        $this->_adresse = $_adresse;
        $this->_nbreChambre = $_nbreChambre;
        $this->_reservation = [];
    
        
	}
    //toString()

    public function __toString(){
        
        return $this->_nom . "  " .$this->_adresse." ".$this->_nbreChambre;
    }    
    
    //getters 

    public function getNom(){
        return $this->_nom;
    }

    public function getAdresse(){
        return $this->_adresse;
    }

    public function getNbreChambre(){
        return $this->_nbreChambre;
    }
    public function getReservation(){
        return $this->_reservation;
    }

    //setters

    public function setNom($_nom){
        $this->_nom = $_nom;
    }

    public function setAdresse($_adresse){
        $this->_adresse = $_adresse;
    }

    public function setNbreChambre($_nbreChambre){
        $this->_nbreChambre = $_nbreChambre;

    }
    public function setNationalite($_reservation){
        $this->_reservation = $_reservation;
    
    }


}
