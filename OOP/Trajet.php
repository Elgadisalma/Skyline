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

}