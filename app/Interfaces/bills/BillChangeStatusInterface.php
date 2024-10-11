<?php

namespace App\Interfaces\bills;

use App\Http\Requests\bills\BillChangeStatusRequest;
use App\Models\Bill;

interface BillChangeStatusInterface
{
    public function execute(BillChangeStatusRequest $billChangeStatusRequest, int $id) : Bill;
}
