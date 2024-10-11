<?php

namespace App\Repositories\users;

use App\Interfaces\users\UserDeleteInterface;
use App\Models\User;

class UserDeleteRepository implements UserDeleteInterface
{

    public function execute(int $id): User
    {
        $user = User::findOrFail($id);
        $deleteUser = $user;
        $user->delete();
        return $deleteUser;
    }
}
