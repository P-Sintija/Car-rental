<?php

namespace Rental;

class Car
{
    private string $name;
    private string $model;
    private int $averageFuelConsumption;
    private int $price;
    private Status $status;

    public function __construct(string $name, string $model, int $consumption, int $price, Status $status)
    {
        $this->name = $name;
        $this->model = $model;
        $this->averageFuelConsumption = $consumption;
        $this->price = $price;
        $this->status = $status;

    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getFuelConsumption(): int
    {
        return $this->averageFuelConsumption;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setStatus(Status $status): void
    {
        $this->status = $status;
    }

    public function getStatus(): Status
    {
        return $this->status;
    }


}


