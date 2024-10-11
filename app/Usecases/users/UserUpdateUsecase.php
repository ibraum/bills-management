<?php

namespace App\Usecases\users;

use App\Http\Requests\users\UserUpdateRequest;
use App\Models\User;
use App\Repositories\users\UserUpdateRepository;

class UserUpdateUsecase
{
    private UserUpdateRepository $userUpdateRepository;
    public function __construct (UserUpdateRepository $userUpdateRepository)
    {
        $this->userUpdateRepository = $userUpdateRepository;
    }

    public function execute (UserUpdateRequest $userUpdateRequest, int $id) : User
    {
        return $this->userUpdateRepository->execute($userUpdateRequest, $id);
    }
}
