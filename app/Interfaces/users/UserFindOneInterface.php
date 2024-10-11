<?php

namespace App\Interfaces\users;

use App\Models\User;

interface UserFindOneInterface
{
    public function execute(int $id) : User;
}
