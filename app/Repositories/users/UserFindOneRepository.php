<?php

namespace App\Repositories\users;

use App\Interfaces\users\UserFindOneInterface;
use App\Models\User;

class UserFindOneRepository implements UserFindOneInterface
{

    public function execute(int $id): User
    {
        return User::find($id);
    }
}
