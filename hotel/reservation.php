<?php

class Reservation{

	private array $_hotel;
    private Client $_client;// à transformer en Client $_client
	private Chambre $_chambre;
    private DateTime $_dateEntree;
    private DateTime $_dateSortie;
    
	//constructeur

	public function __construct(Client $_client,Chambre $_chambre,$_dateEntree,$_dateSortie){


		$this->_hotel = [];
        $this->_client = $_client;
        $this->_chambre = $_chambre;
        //$this->_chambre->addChambre($this);
        $this->_dateEntree = new DateTime ($_dateEntree); 
        $this->_dateSortie = new DateTime ($_dateSortie);
        
	}
    //toString()

    public function __toString(){
        
        return $this->_dateEntree->format("d-M-Y ")." ".$this->_dateSortie->format("d-M-Y");
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
    public function getDateEntree(){
        return $this->_dateEntree;
    }
    public function getDateSortie(){
        return $this->_dateSortie;
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
    public function setDateEntree($_dateEntree){
        $this->_dateEntree = $_dateEntree;

    }
    public function setDateSortie($_dateSortie){
        $this->_dateSortie = $_dateSortie;
    
    }
        // Nombre de nuitées

    public function CalculSejour(){
        
        $sejour = $this->_dateSortie->diff($this->_dateEntree);
        return $sejour->format("%D jours");
        
    }
        // ajouter un hotel

    public function addHotel(Hotel $_nom){
        $this->_hotel[]=$_nom;
    }

}
