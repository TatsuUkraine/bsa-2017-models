<?php

namespace App\Manager;


use App\Car;
use App\Manager\Contract\CarManager as CarManagerContract;
use App\Request\SaveCarRequest;

class CarManager implements CarManagerContract
{

    /**
     * @return Car[]
     */
    public function findAll(): array
    {
        // TODO: Implement findAll() method.
    }

    /**
     * @param int $id
     * @return Car|null
     */
    public function findById(int $id)
    {
        // TODO: Implement findById() method.
    }

    /**
     * @param SaveCarRequest $request
     * @return Car
     */
    public function saveCar(SaveCarRequest $request): Car
    {
        // TODO: Implement saveCar() method.
    }
}