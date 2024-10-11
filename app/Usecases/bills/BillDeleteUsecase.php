<?php

namespace App\Usecases\bills;

use App\Models\Bill;
use App\Repositories\bills\BillDeleteRepository;

class BillDeleteUsecase
{
    private BillDeleteRepository $billDeleteRepository;
    public function __construct (BillDeleteRepository $billDeleteRepository)
    {
        $this->billDeleteRepository = $billDeleteRepository;
    }

    public function execute (int $id) : Bill
    {
        return $this->billDeleteRepository->execute($id);
    }
}
