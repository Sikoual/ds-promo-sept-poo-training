<?php

require_once 'Vehicle.php';
require_once 'GasolinaCarInterface.php';

class GasolinaCar extends Vehicle implements GasolinaCarInterface
{
    public function __construct(string $brand, int $wheel, int $seat, protected int $fuel = 100)
    {
        parent::__construct($brand, $wheel, $seat);
    }

    public function ride(int $km): void
    {
        if ($this->fuel <= 0) {
            $this->fuel = 0;
            echo 'Plus d\'essence, vous ne pouvez plus rouler';
        }

        $fuelConsumed = $km / 100;

        $this->fuel -= $fuelConsumed * 10;
    }

    public function getFuel(): int
    {
        return $this->fuel;
    }

    public function setFuel(int $fuel): void
    {
        $this->fuel = $fuel;
    }
}
