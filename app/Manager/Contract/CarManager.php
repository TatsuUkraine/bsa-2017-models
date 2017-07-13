<?php

namespace App\Manager\Contract;


use App\Car;
use App\Request\SaveCarRequest;

interface CarManager
{
    /**
     * @return Car[]
     */
    public function findAll(): array;

    /**
     * @param int $id
     * @return Car|null
     */
    public function findById(int $id);

    /**
     * @param SaveCarRequest $request
     * @return Car
     */
    public function saveCar(SaveCarRequest $request): Car;
}