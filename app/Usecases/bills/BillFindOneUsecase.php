<?php

namespace App\Usecases\bills;

use App\Models\Bill;
use App\Repositories\bills\BillFindOneRepository;

class BillFindOneUsecase
{
    private BillFindOneRepository $billFindOneRepository;
    public function __construct (BillFindOneRepository $billFindOneRepository)
    {
        $this->billFindOneRepository = $billFindOneRepository;
    }

    public function execute (int $id) : Bill
    {
        return $this->billFindOneRepository->execute($id);
    }
}
