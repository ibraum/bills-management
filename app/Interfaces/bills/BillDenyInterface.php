<?php

namespace App\Interfaces\bills;

use App\Models\Bill;

interface BillDenyInterface
{
    public function execute(int $id) : Bill;
}
