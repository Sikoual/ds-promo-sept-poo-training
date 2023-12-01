<?php

require_once 'Vehicle.php';
require_once 'ElectricCarInterface.php';

class ElectricCar extends Vehicle implements ElectricCarInterface
{
    public function __construct(string $brand, int $wheel, int $seat, private int $energy = 500)
    {
        parent::__construct($brand, $wheel, $seat);
    }

    public function getEnergy(): int
    {
        return $this->energy;
    }

    public function setEnergy(int $energy): void
    {
        $this->energy = $energy;
    }

    public function ride(int $km)
    {
        if ($this->energy <= 0) {
            $this->energy = 0;
            echo 'Plus d\'energie, vous ne pouvez plus rouler';
        }

        $this->energy -= $km;
    }
}

$test = new ElectricCar('Mercedes', 4,5);
