<?php


class Joueur
{
    private string $_nomJoueur;
    private string $_prenomJoueur;
    private DateTime $_dateNaissance;
    private Nationalite $_nationalite;
    //private Carriere $_club;
    private $_carriere;
    //constructeur

    public function __construct($_nomJoueur, $_prenomJoueur, $_dateNaissance, Nationalite $_nationalite)
    { //},$_carriere){//Carriere $_club){


        $this->_nomJoueur = $_nomJoueur;
        $this->_prenomJoueur = $_prenomJoueur;
        $this->_dateNaissance = new DateTime($_dateNaissance);
        $this->_nationalite = $_nationalite;
        $this->_nationalite->addJoueur($this);
        $this->_carriere = [];
        //$this->_club->addJoueur($this);
    }


    //fonction addCarriere
    public function addCarriere(Carriere $carriere){
        $this->_carriere[] = $carriere;
    }



    //toString()

    public function __toString()
    {

        return $this->_nomJoueur . "  " . $this->_prenomJoueur . " " . $this->calculerAge();
    } //$this->_prenomJoueur." Nationalité :  ".$this->_nationalite." "

    //getters 

    public function getNomJoueur()
    {
        return $this->_nomJoueur;
    }

    public function getPrenomJoueur()
    {
        return $this->_prenomJoueur;
    }

    public function getDateNaissance()
    {
        return $this->_dateNaissance;
    }
    public function getNationalite()
    {
        return $this->_nationalite;
    }

    //setters

    public function setNomJoueur($_nomJoueur)
    {
        $this->_nomJoueur = $_nomJoueur;
    }

    public function setPrenomJoueur($_prenomJoueur)
    {
        $this->_prenomJoeur = $_prenomJoueur;
    }

    public function setDateNaissance($_dateNaissance)
    {
        $this->_dateNaissance = $_dateNaissance;
    }
    public function setNationalite($_nationalite)
    {
        $this->_nationalite = $_nationalite;
    }

    public function calculerAge()
    {
        $now = new DateTime();
        $age = $this->_dateNaissance->diff($now);
        return $age->format("%Y ans");
    }
    public function afficherCarriere()
    {
        $result = "";
        foreach ($this->_carriere as $carriere) { //attention on ne peut utiliser le $this que dans sa propre classe
            $result .= $carriere->getEquipe()." ". $carriere->getAnnee() . " <br>";
        }
        return $result;
    }
}
