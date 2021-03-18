<?php

require_once 'vendor/autoload.php';

use Rental\CarRental;
use Rental\Status;

$carRental = new CarRental();

function manageCars(CarRental $cars, array $post): void
{
    foreach ($cars->getRentalCars()->getCarsList() as $car) {
        if ($car->getName() == key($post)) {
            if ($post[key($post)] === 'rent') {
                $car->setStatus(new Status($post[key($post)]));
            } else {
                $car->setStatus(new Status('available'));
            }
        }
    }
}

manageCars($carRental, $_POST);

$carRental->saveChanges();

require_once 'view.php';

