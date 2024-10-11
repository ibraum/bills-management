<?php

namespace App\Usecases\bills;

use App\Http\Requests\bills\BillChangeStatusRequest;
use App\Models\Bill;
use App\Repositories\bills\BillChangeStatutRepository;

class BillChangeStatutUsecase
{
    private BillChangeStatutRepository $billChangeStatutRepository;
    public function __construct (BillChangeStatutRepository $billChangeStatutRepository)
    {
        $this->billChangeStatutRepository = $billChangeStatutRepository;
    }

    public function execute (BillChangeStatusRequest $billChangeStatusRequest, int $id) : Bill
    {
        return $this->billChangeStatutRepository->execute($billChangeStatusRequest, $id);
    }
}
