<?php

abstract class User implements Details{
    
    protected $name;
    protected $adress;
    protected $phoneNumber;

    public function __construct($name, $adress, $phoneNumber) {
        $this->name = $name;
        $this->adress = $adress;
        $this->phoneNumber = $phoneNumber;
    }

    abstract function afficherDetails();

}