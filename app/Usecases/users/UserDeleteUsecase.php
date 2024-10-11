<?php

namespace App\Usecases\users;

use App\Models\User;
use App\Repositories\users\UserDeleteRepository;

class UserDeleteUsecase
{
    private UserDeleteRepository $userDeleteRepository;
    public function __construct (UserDeleteRepository $userDeleteRepository)
    {
        $this->userDeleteRepository = $userDeleteRepository;
    }

    public function execute (int $id) : User
    {
        return $this->userDeleteRepository->execute($id);
    }
}
