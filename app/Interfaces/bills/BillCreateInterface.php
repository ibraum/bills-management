<?php

namespace App\Interfaces\bills;

use App\Http\Requests\bills\BillRequest;
use App\Models\Bill;

interface BillCreateInterface
{
    public function execute(BillRequest $billRequest) : Bill;
}
