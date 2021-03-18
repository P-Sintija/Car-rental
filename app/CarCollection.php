<?php

namespace Rental;

class CarCollection
{
    private array $rentalCars;

    public function addCar(Car $car): void
    {
        $this->rentalCars[] = $car;
    }

    public function getCarsList(): array
    {
        return $this->rentalCars;
    }

}