<?php

class Trajet implements Details{

    private $vehicule;
    private $pointEntre;
    private $pointSortie;
    private $dateEntre;
    // private $event;

    public function __construct($vehicule, $pointEntre, $pointSortie, $dateEntre) {
        $this->vehicule = $vehicule;
        $this->pointEntre = $pointEntre;
        $this->pointSortie = $pointSortie;
        $this->dateEntre = $dateEntre;
        // $this->event = $event;
    }


    
    // Getters
    public function getVehicule() {
        return $this->vehicule;
    }

    public function getPointEntre() {
        return $this->pointEntre;
    }

    public function getPointSortie() {
        return $this->pointSortie;
    }

    public function getDateEntre() {
        return $this->dateEntre;
    }


    
    // Setters
    public function setVehicule($vehicule) {
        $this->vehicule = $vehicule;
    }

    public function setPointEntre($pointEntre) {
        $this->pointEntre = $pointEntre;
    }

    public function setPointSortie($pointSortie) {
        $this->pointSortie = $pointSortie;
    }

    public function setDateEntre($dateEntre) {
        $this->dateEntre = $dateEntre;
    }



   public function afficherDetails() {
        echo "trajet: entre: {$this->pointEntre}, sortie: {$this->pointSortie}, dateEntre: {$this->dateEntre}\n";
        // foreach ($this->events as $event) {
        //     $event->displayDetails();
        // }
    }
}