<?php

namespace App\Usecases\users;

use App\Http\Requests\users\UserRequest;
use App\Models\User;
use App\Repositories\users\UserCreateRepository;

class UserCreateUsecase
{
    private UserCreateRepository $userCreateRepository;
    public function __construct(UserCreateRepository $userCreateRepository)
    {
        $this->userCreateRepository = $userCreateRepository;
    }

    public function execute (UserRequest $userRequest) : User
    {
        return $this->userCreateRepository->execute($userRequest);
    }
}
