<?php

class Proprietaire extends User{

    public function afficherDetails()
    {
        return "Nom du propriétaire: {$this->name}, Adresse du propriétaire: {$this->adress}, Téléphone du propriétaire: {$this->phoneNumber}";
    }

}

