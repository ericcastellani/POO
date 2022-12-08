
<?php
class Client{

	private string $_nom;
    private string $_prenom;
    private array $_reservation;
    
    
	//constructeur

	public function __construct($_nom,$_prenom){


		$this->_nom = $_nom;
        $this->_prenom = $_prenom;
		$this->_reservation = [];
		
  
	}

	
	//toString()

    public function __toString(){
        
        return $this->_nom . "  " .$this->_prenom." ";
    }    
    
    //getters 

    public function getNom(){
        return $this->_nom;
    }
    
    public function getPrenom(){
        return $this->_prenom;
	}
	public function getReservation(){
		return $this->_reservation;
	}
	//setters

	public function setNom($_nom){
		$this->_nom = $_nom;
	}
	public function setPrenom($_prenom){
		$this->_prenom = $_prenom;
	}
	public function setReservation($_reservation){
		$this->_reservation = $_reservation;
	}



}