<?php

namespace App\Usecases\bills;

use App\Http\Requests\bills\BillUpdateRequest;
use App\Models\Bill;
use App\Repositories\bills\BillUpdateRepository;

class BillUpdateUsecase
{
    private BillUpdateRepository $billUpdateRepository;
    public function __construct (BillUpdateRepository $billUpdateRepository)
    {
        $this->billUpdateRepository = $billUpdateRepository;
    }

    public function execute (BillUpdateRequest $billUpdateRequest, int $id) : Bill
    {
        return $this->billUpdateRepository->execute($billUpdateRequest, $id);
    }
}
