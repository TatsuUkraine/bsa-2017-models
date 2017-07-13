<?php

namespace App\Manager\Contract;


use App\Request\SaveUserRequest;
use App\User;

interface UserManager
{
    /**
     * @return User[]
     */
    public function findAll(): array;

    /**
     * @param int $id
     * @return User|null
     */
    public function findById(int $id);

    /**
     * @param SaveUserRequest $request
     * @return User
     */
    public function saveUser(SaveUserRequest $request): User;
}