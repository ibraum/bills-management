<?php

namespace App\Usecases\bills;

use App\Repositories\bills\BillListRepository;
use Illuminate\Database\Eloquent\Collection;

class BillListUsecase
{
    private BillListRepository $billListRepository;
    public function __construct (BillListRepository $billListRepository)
    {
        $this->billListRepository = $billListRepository;
    }

    public function execute () : Collection
    {
        return $this->billListRepository->execute();
    }
}
