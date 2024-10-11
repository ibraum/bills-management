<?php

namespace App\Interfaces\bills;

use App\Models\Bill;

interface BillDeleteInterface
{
    public function execute(int $id) : Bill;
}
