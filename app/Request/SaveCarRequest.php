<?php

namespace App\Request;


use App\Car;
use App\User;

class SaveCarRequest extends BaseRequest
{
    public function __construct(array $options, Car $car = null)
    {
        parent::__construct(array_merge([
            'car' => $car
        ], $options));
    }

    /**
     * @return Car
     */
    public function getCar(): Car
    {
        return $this->get('car', new Car());
    }

    /**
     * @return string|null
     */
    public function getColor()
    {
        return $this->get('color');
    }

    /**
     * @return string|null
     */
    public function getModel()
    {
        return $this->get('model');
    }

    /**
     * @return string|null
     */
    public function getRegistrationNumber()
    {
        return $this->get('registration_number');
    }

    /**
     * @return string|null
     */
    public function getYear()
    {
        return $this->get('year');
    }

    /**
     * @return string|null
     */
    public function getMileage()
    {
        return $this->get('mileage');
    }

    /**
     * @return float|null
     */
    public function getPrice()
    {
        return $this->get('price');
    }

    /**
     * @return User|null
     */
    public function getUser()
    {
        return $this->get('user');
    }
}