<?php

class Reservation{

	private array $_hotel;
    private string $_nomClient;// à transformer en Client $_client
    private string $_prenomClient;//à supprimer
	private Chambre $_chambre;
    
    
	//constructeur

	public function __construct($_hotel,$_nomClient,$_prenomClient,Chambre $_chambre){


		$this->_hotel = $_hotel;
        $this->_nomClient = $_nomClient;// à transformer en $_client
        $this->_prenomClient = $_prenomClient;//à supprimer
        $this->_chambre = $_chambre;
        $this->_chambre->addChambre($this);
        
	}
    //toString()

    public function __toString(){
        
        return $this->_hotel . "  " .$this->_nomClient." ".$this->_prenomClient." ".$this->_chambre; //attention a client
    }    
    
    //getters 

    public function getHotel(){
        return $this->_hotel;
    }

    public function getNomClient(){
        return $this->_nomClient;
    }

    public function getPrenomClient(){
        return $this->_prenomClient;
    }
    public function getChambre(){
        return $this->_chambre;
    }

    //setters

    public function setHotel($_hotel){
        $this->_hotel = $_hotel;
    }

    public function setNomClient($_nomClient){
        $this->_nomClient = $_nomClient;
    }

    public function setPrenomClient($_prenomClient){
        $this->_prenomClient = $_prenomClient;

    }
    public function setChambre($_chambre){
        $this->_chambre = $_chambre;
    
    }


}
