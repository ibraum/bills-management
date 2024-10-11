<?php

namespace App\Usecases\users;

use App\Models\User;
use App\Repositories\users\UserFindOneRepository;

class UserFindOneUsecase
{
    private UserFindOneRepository $userFindOneRepository;
    public function __construct (UserFindOneRepository $userFindOneRepository)
    {
        $this->userFindOneRepository = $userFindOneRepository;
    }

    public function execute (int $id) : User
    {
        return $this->userFindOneRepository->execute($id);
    }
}
