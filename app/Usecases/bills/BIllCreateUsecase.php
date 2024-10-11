<?php

namespace App\Usecases\bills;

use App\Http\Requests\bills\BillRequest;
use App\Models\Bill;
use App\Repositories\bills\BillCreateRepository;

class BIllCreateUsecase
{
    private BillCreateRepository $billCreateRepository;
    public function __construct (BillCreateRepository $billCreateRepository)
    {
        $this->billCreateRepository = $billCreateRepository;
    }

    public function execute (BillRequest $billRequest) : Bill
    {
        return $this->billCreateRepository->execute($billRequest);
    }
}
