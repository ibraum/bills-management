<?php

namespace App\Repositories\users;

use App\Http\Requests\users\UserRequest;
use App\Interfaces\users\UserCreateInterface;
use App\Models\User;

class UserCreateRepository implements UserCreateInterface
{
    public function execute(UserRequest $userRequest) : User
    {
        $user = new User();
        $user->nom = $userRequest->input('nom');
        $user->email = $userRequest->input('email');
        $user->telephone = $userRequest->input('telephone');
        $user->adresse = $userRequest->input('adresse');

        $user->save();
        return $user;
    }
}
