<?php

namespace App\Repositories;

use App\User;
//use Your Model

/**
 * Class UserRepository.
 */
class UserRepository
{
    public function create($userData):User{
        return User::create($userData);
    }
}
