<?php

namespace App\Manager\Contract;


use App\Request\SaveUserRequest;
use App\User;
use Illuminate\Support\Collection;

interface UserManager
{
    /**
     * @return Collection
     */
    public function findAll(): Collection;

    /**
     * @param int $id
     * @return User|null
     */
    public function findById(int $id);

    /**
     * @return Collection
     */
    public function findActive(): Collection;

    /**
     * @param SaveUserRequest $request
     * @return User
     */
    public function saveUser(SaveUserRequest $request): User;
}