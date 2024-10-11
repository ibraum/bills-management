<?php

namespace App\Interfaces\bills;

use App\Http\Requests\bills\BillUpdateRequest;
use App\Models\Bill;

interface BillUpdateInterface
{
    public function execute(BillUpdateRequest $billUpdateRequest, int $id) : Bill;
}
