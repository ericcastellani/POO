
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

	//ajouter reservation

	public function addReservation(Reservation $reservation){
		$this->_reservation[]=$reservation;
	}

	//afficher reservation
	public function afficherReservation(){
		$result="";
		$total = 0;
		foreach($this->_reservation as $reservation){
			$result .=$reservation->getHotel()."  ".$reservation->getChambre(). $reservation->calculSejour(). " nuits ".$reservation->CalculFacture(). "€<br>";
			$total +=$reservation->CalculFacture();
			//var_dump($this->_reservation)."<br>";
			//var_dump($total)." <br>";

		}
		return $result.$total." €";// lorsqu'un return il sort de la fonction if faut donc cumuler les variables pour les afficher
		//return $total;  --> ne fonctionne pas car dès qu'il voit un return il sort de la fonction il faut donc le concatainer avec $result

	}



}