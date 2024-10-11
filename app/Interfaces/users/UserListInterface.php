<?php

namespace App\Interfaces\users;

use Illuminate\Database\Eloquent\Collection;

interface UserListInterface
{
    public function execute () : Collection;
}
