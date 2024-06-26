<?php

require_once './classes/Details.php';
require_once './classes/User.php';
require_once './classes/Trajet.php';
require_once './classes/Event.php';
require_once './classes/Peage.php';
require_once './classes/Proprietaire.php';
require_once './classes/Vehicule.php';


$proprietaire = new Proprietaire("Salma", "Marrakech", "12345678");
$vehicule = new Vehicule("123ABC", "voiture", "salma");
$trajet = new Trajet("salma", "Entrée A", "Sortie B", "2024-06-27");

echo"\n";

$proprietaire->afficherDetails();

echo"\n";

$vehicule->afficherDetails();

echo"\n";

$trajet->afficherDetails();
echo"\n";
