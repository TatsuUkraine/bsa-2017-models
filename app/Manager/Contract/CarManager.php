<?php

namespace App\Manager\Contract;


use App\Car;
use App\Request\SaveCarRequest;
use Illuminate\Support\Collection;

interface CarManager
{
    /**
     * @return Collection
     */
    public function findAll(): Collection;

    /**
     * @param int $id
     * @return Car|null
     */
    public function findById(int $id);

    /**
     * @return Collection
     */
    public function findCarsFromActiveUsers(): Collection;

    /**
     * @param SaveCarRequest $request
     * @return Car
     */
    public function saveCar(SaveCarRequest $request): Car;
}