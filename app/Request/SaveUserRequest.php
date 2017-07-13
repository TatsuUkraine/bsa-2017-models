<?php

namespace App\Request;


use App\User;

class SaveUserRequest extends BaseRequest
{
    public function __construct(array $options, User $user = null)
    {
        parent::__construct(array_merge([
            'user' => $user
        ], $options));
    }

    /**
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->get('first_name');
    }

    /**
     * @return string|null
     */
    public function getLastName()
    {
        return $this->get('first_name');
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->get('user', new User());
    }
}