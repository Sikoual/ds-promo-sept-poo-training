<?php

abstract class Vehicle
{
    public function __construct(
        protected string $brand,
        protected int $wheel,
        protected int $seat,
    ) {
    }

    public function start()
    {
        echo 'La voiture démarre';
    }

    public function break()
    {
        echo 'La voiture s\'arrete';
    }

    abstract public function ride(int $km);

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function getWheel(): int
    {
        return $this->wheel;
    }

    public function setWheel(int $wheel): void
    {
        $this->wheel = $wheel;
    }

    public function getSeat(): int
    {
        return $this->seat;
    }

    public function setSeat(int $seat): void
    {
        $this->seat = $seat;
    }

}