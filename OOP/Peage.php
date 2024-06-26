<?php

class Peage implements Details
{

    private $price;
    private $emplacement;
    private $vehicule;

    public function __construct($emplacement, $price, $vehicule)
    {
        $this->emplacement = $emplacement;
        $this->price = $price;
        $this->vehicule = $vehicule;
    }

    // Getters

    public function getEmplacement($emplacement)
    {
        return $emplacement;
    }

    public function getPrice($price)
    {
        return $price;
    }

    public function getTime($vehicule)
    {
        return $vehicule;
    }


    // setters

    public function setEmplacement($emplacement)
    {
        $this->emplacement = $emplacement;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setTime($vehicule)
    {
        $this->vehicule = $vehicule;
    }


    public function afficherDetails()
    {
        echo "Peage: emplacement: {$this->emplacement}, price: {$this->price}, vehicule: {$this->vehicule->getMatricule()}\n";
    }
}
