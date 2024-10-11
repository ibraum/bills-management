<?php

namespace App\Repositories\users;

use App\Interfaces\users\UserListInterface;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserListRepository implements UserListInterface
{

    public function execute(): Collection
    {
        return User::all();
    }
}
