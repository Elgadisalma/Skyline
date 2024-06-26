<?php

class Vehicule implements Details{

    private $matricule;
    private $type;
    private $proprietaire;


    public function __construct($matricule, $type, $proprietaire) {
        $this->matricule = $matricule;
        $this->type = $type;
        $this->proprietaire = $proprietaire;
    }

    // Getters
    public function getMatricule() 
    {
        return $this->matricule;
    }

    public function getType() 
    {
        return $this->type;
    }

    public function getProprietaire() 
    {
        return $this->proprietaire;
    }

    // Setters
    public function setMatricule($matricule) 
    {
        $this->matricule = $matricule;
    }

    public function setType($type) 
    {
        $this->type = $type;
    }

    public function setProprietaire($proprietaire) 
    {
        $this->proprietaire = $proprietaire;
    }

    public function afficherDetails() 
    {
        echo "Véhicule: {$this->matricule}, Type: {$this->type}, Propriétaire: {$this->proprietaire}\n";
    }
}