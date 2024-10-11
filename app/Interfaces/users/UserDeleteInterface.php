<?php

namespace App\Interfaces\users;

use App\Models\User;

interface UserDeleteInterface
{
    public function execute (int $id) : User;
}
