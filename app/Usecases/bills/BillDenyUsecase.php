<?php

namespace App\Usecases\bills;

use App\Models\Bill;
use App\Repositories\bills\BillDenyRepository;

class BillDenyUsecase
{
    private BillDenyRepository $billDenyRepository;
    public function __construct (BillDenyRepository $billDenyRepository)
    {
        $this->billDenyRepository = $billDenyRepository;
    }

    public function execute (int $id) : Bill
    {
        return $this->billDenyRepository->execute($id);
    }
}
