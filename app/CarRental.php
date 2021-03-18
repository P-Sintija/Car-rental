<?php

namespace Rental;

class CarRental
{
    private CarCollection $cars;

    public function __construct()
    {
        $this->cars = new CarCollection();
        $readJSON = file_get_contents('Storage/cars.json');

        foreach (json_decode($readJSON, true) as $car) {
            $this->cars->addCar(
                new Car($car['name'],
                    $car['model'],
                    (int)$car['consumption'],
                    (int)$car['price'],
                    new Status($car['status'])));
        }
    }


    public function getRentalCars(): CarCollection
    {
        return $this->cars;
    }

    public function saveChanges(): void
    {
        $readJSON = file_get_contents('Storage/cars.json');
        $entries = json_decode($readJSON, true);

        for ($i = 0; $i < count($this->cars->getCarsList()); $i++) {
            $entries[$i]['name'] = $this->cars->getCarsList()[$i]->getName();
            $entries[$i]['model'] = $this->cars->getCarsList()[$i]->getModel();
            $entries[$i]['consumption'] = (string)$this->cars->getCarsList()[$i]->getFuelConsumption();
            $entries[$i]['price'] = (string)$this->cars->getCarsList()[$i]->getPrice();
            $entries[$i]['status'] = $this->cars->getCarsList()[$i]->getStatus()->getStatus();
        }

        $modifiedJSON = json_encode($entries);
        file_put_contents('Storage/cars.json', $modifiedJSON);
    }

}

