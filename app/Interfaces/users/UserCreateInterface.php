<?php

namespace App\Interfaces\users;

use App\Http\Requests\users\UserRequest;
use App\Models\User;

interface UserCreateInterface
{
    public function execute(UserRequest $userRequest) : User;
}
