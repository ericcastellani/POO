<?php
echo"Soit une application qui gère des équipes de football

Une équipe possède un nom (Paris Saint-Germain, Bayern Munich, Real Madrid, ...) et un ensemble de joueurs identifié par un prénom, un nom et une date de naissance

Chaque équipe appartient à un pays (France, Espagne, Allemagne, ...) et chaque joueur a une nationalité (France, Espagne, Allemagne, ...)

Un joueur peut jouer dans une ou plusieurs équipes dans sa carrière (avec une année de début de saison)



Concevez le projet en POO de façon à :

- lister toutes les équipes d'un pays

    Ex : France --> PSG, OM, OL, RCSA, ...

- lister tous les joueur s d'une équipe (avec nom, prénom, âge et pays d'origine)

    Ex : PSG --> Neymar JR (30 ans), Lionel Messi (35 ans), Kylian Mbappé (23 ans)

- lister toutes les équipes d'un joueur

    Ex : Lionel Messi (FC Barcelone 2004, PSG 2021)<br>";
    


class Equipe
{
	private string $_nomEquipe;
	private array $_carriere;
	private Pays $_pays;

	//constructeur

	public function __construct($_nomEquipe, Pays $_pays)
	{ // à changer class Realisateur
		$this->_nomEquipe = $_nomEquipe;
		$this->_carriere = [];
		$this->_pays = $_pays;
        $this->_pays->addEquipe($this);
	}

	//toString()

	public function __toString(){
		return $this->_nomEquipe." ".$this->_pays."<br>";
	}

	//getters

	public function getNomEquipe(){
        return $this->_nomEquipe;
    }
    public function getCarriere(){
        return $this->_carriere;
    }
    public function getPays(){
        return $this->_pays;
    }

    //setters
    public function setNomEquipe($_nomEquipe){
        $this->_nomEquipe = $_nomEquipe;
    }
    Public function setCarriere($_carriere){
        $this->_carriere = $_carriere;
    }
    public function setPays($_pays){
        $this->_pays = $_pays;
    }
    //fonction addCarriere
    public function addCarriere(Carriere $carriere){
        $this->_carriere[]=$carriere;

    }
    /*public function afficherEquipe(){
        $result = "";
        foreach  ($this->_pays as $pays){//attention on ne peut utiliser le $this que dans sa propre classe
            $result .=$pays->getNomEquipe()." <br>";
        }
            return $result;
        }*/
    
}