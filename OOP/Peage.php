<?php

class Peage implements Details{

    private $price;
    private $emplacement;
    private $vehicule;

    public function __construct($emplacement, $price, $vehicule) {
        $this->emplacement = $emplacement;
        $this->price = $price;
        $this->vehicule = $vehicule;
    }

}