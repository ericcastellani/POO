<?php

class Hotel
{

	private string $_nom;
	private string $_adresse;
	private int $_nbreChambre;
	private array $_reservation;
	private array $_statutChambre; // * ajout *
	


	//constructeur

	public function __construct($_nom, $_adresse, $_nbreChambre)
	{


		$this->_nom = $_nom;
		$this->_adresse = $_adresse;
		$this->_nbreChambre = $_nbreChambre;
		$this->_reservation = [];
		$this->_statutChambre = []; // * ajout *

	}
	//toString()

	public function __toString()
	{

		return $this->_nom . "  " . $this->_adresse . " "; //.$this->_nbreChambre;
	}

	//getters 

	public function getNom()
	{
		return $this->_nom;
	}

	public function getAdresse()
	{
		return $this->_adresse;
	}

	public function getNbreChambre()
	{
		return $this->_nbreChambre;
	}
	public function getReservation()
	{
		return $this->_reservation;
	}
	public function getStatuChambre(){ // * ajout *
		return $this->_statuChambre;

	}

	//setters

	public function setNom($_nom)
	{
		$this->_nom = $_nom;
	}

	public function setAdresse($_adresse)
	{
		$this->_adresse = $_adresse;
	}

	public function setNbreChambre($_nbreChambre)
	{
		$this->_nbreChambre = $_nbreChambre;
	}
	public function setReservation($_reservation)
	{
		$this->_reservation = $_reservation;
	}
	public function setStatutChambre($_statutChambre){ // * ajout *
		$this->_statutChambre = $_statutChambre;
	}
	//ajouter réservation

	public function addReservation(Reservation $reservation)
	{
		$this->_reservation[] = $reservation;
	}
	//afficher réservation

	public function afficherReservationHotel()
	{
		$result = "";
		$compteur = 0;
		foreach ($this->_reservation as $reservation) {
			$result .= $reservation->getClient() . "  " . $reservation->getChambre() . " du " . $reservation->getDateEntree()->format("d-m-Y") . " au " . $reservation->getDateSortie()->format("d-m-Y") . "<br>";
			$compteur++;
			//var_dump($this->_reservation)."<br>";
		}
		//var_dump($compteur);
		if ($compteur == 0 || $compteur == "") { // ne pas omettre == et non =
			$compteur = "Aucune";
		}

		//echo "<span id='reserv'>" . $compteur . "</span>";

		return $result . $compteur . "<b> RESERVATION(S) </b>"; // lorsqu'un return il sort de la fonction if faut donc cumuler les variables pour les afficher

	}
	//return $compteur;  --> ne fonctionne pas car dès qu'il voit un return il sort de la fonction il faut donc le concatainer avec $result

	public function afficherInformationHotel()
	{

		$compteur = 0;
		foreach ($this->_reservation as $reservation) {
			$compteur++;
		}

		echo "<b>Nombre de chambres : </b>" . $this->_nbreChambre . "<br>";
		echo "<b>Nombre de chambres réservées : </b>" . $compteur . "<br>";
		echo "<b>Nombre de chambres dispo : </b>";
		echo $this->_nbreChambre - $compteur . "<br>";
		//RMQ : Lorsque la fonction ne consiste qu'à afficher on n'est pas obligé d'avoir un return

	}
	// ajouter chambre
	public function addChambre(Chambre $chambre){ // * ajout *
		$this->_statutChambre[] = $chambre;
	}
}
