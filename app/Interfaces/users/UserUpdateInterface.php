<?php

namespace App\Interfaces\users;

use App\Http\Requests\users\UserUpdateRequest;
use App\Models\User;

interface UserUpdateInterface
{
    public function execute (UserUpdateRequest $userUpdateRequest, int $id) : User;
}
