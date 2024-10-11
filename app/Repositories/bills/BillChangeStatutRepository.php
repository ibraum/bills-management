<?php

namespace App\Repositories\bills;

use App\Http\Requests\bills\BillChangeStatusRequest;
use App\Interfaces\bills\BillChangeStatusInterface;
use App\Interfaces\bills\BillCreateInterface;
use App\Models\Bill;

class BillChangeStatutRepository implements BillChangeStatusInterface
{

    public function execute(BillChangeStatusRequest $billChangeStatusRequest, int $id): Bill
    {
        $statut = $billChangeStatusRequest->input('status');
        $bill = Bill::findOrFail($id);

        $bill->status = $statut;
        $bill->update();

        return $bill;
    }
}
