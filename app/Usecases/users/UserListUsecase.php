<?php

namespace App\Usecases\users;

use App\Repositories\users\UserListRepository;
use Illuminate\Database\Eloquent\Collection;

class UserListUsecase
{
    private UserListRepository $userListRepository;
    public function __construct (UserListRepository $userListRepository)
    {
        $this->userListRepository = $userListRepository;
    }

    public function execute () : Collection
    {
        return $this->userListRepository->execute();
    }
}
