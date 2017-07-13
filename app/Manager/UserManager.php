<?php

namespace App\Manager;


use App\Manager\Contract\UserManager as UserManagerContract;
use App\Request\SaveUserRequest;
use App\User;

class UserManager implements UserManagerContract
{

    /**
     * @return User[]
     */
    public function findAll(): array
    {
        // TODO: Implement findAll() method.
    }

    /**
     * @param int $id
     * @return User|null
     */
    public function findById(int $id)
    {
        // TODO: Implement findById() method.
    }

    /**
     * @param SaveUserRequest $request
     * @return User
     */
    public function saveUser(SaveUserRequest $request): User
    {
        // TODO: Implement saveUser() method.
    }
}