<?php

require_once 'GasolinaCar.php';
require_once 'GasolinaCarInterface.php';
require_once 'ElectricCarInterface.php';

class HybridCar extends GasolinaCar implements GasolinaCarInterface, ElectricCarInterface
{
    public function __construct(string $brand, int $wheel, int $seat, int $fuel = 100, private int $energy = 100)
    {
        parent::__construct($brand, $wheel, $seat, $fuel);
    }

    public function ride(int $km): void
    {
        $fuelNeeded = $km / 10;

        if ($this->fuel >= $fuelNeeded) {
            $this->fuel -= $fuelNeeded;
        } else {
            $kmCoveredByFuel = $this->fuel * 10;
            $this->fuel = 0;

            $remainingDistance = $km - $kmCoveredByFuel;

            if ($this->energy >= $remainingDistance) {
                $this->energy -= $remainingDistance;
            } else {
                $this->energy = 0;
                echo 'Plus d\'essence ni d\'énergie, vous ne pouvez plus rouler';
            }
        }
    }

    public function getEnergy(): int
    {
        return $this->energy;
    }

    public function setEnergy(int $energy): void
    {
        $this->energy = $energy;
    }
}

$test = new HybridCar('Mercedes', 4, 5);