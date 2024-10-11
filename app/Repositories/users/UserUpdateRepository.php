<?php

namespace App\Repositories\users;

use App\Http\Requests\users\UserRequest;
use App\Http\Requests\users\UserUpdateRequest;
use App\Interfaces\users\UserUpdateInterface;
use App\Models\User;

class UserUpdateRepository implements UserUpdateInterface
{

    public function execute(UserUpdateRequest $userUpdateRequest, int $id): User
    {

        $user = $userUpdateRequest->validated();
        $oldUser = User::all()->find($id);
        $oldUser->nom = $user['nom'] ?? $oldUser->nom;
        $oldUser->email = $user['email'] ?? $oldUser->email;
        $oldUser->telephone = $user['telephone'] ?? $oldUser->telephone;
        $oldUser->adresse = $user['adresse'] ?? $oldUser->adresse;
        $oldUser->save();

        return $oldUser;
    }
}
