<?php

namespace App\Interfaces\bills;

use App\Models\Bill;

interface BillFindOneInterface
{
    public function execute (int $id) : Bill;
}
