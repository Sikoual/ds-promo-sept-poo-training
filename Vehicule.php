<?php

class Vehicule implements VehiculeInterface
{
    public function demarrer(){
        echo 'la voiture démarre';
    }
}




class Voiture extends Vehicule {

}

$voiture = new Voiture();
$voiture->demarrer();