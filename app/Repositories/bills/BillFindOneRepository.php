<?php

namespace App\Repositories\bills;

use App\Interfaces\bills\BillCreateInterface;
use App\Interfaces\bills\BillFindOneInterface;
use App\Models\Bill;

class BillFindOneRepository implements BillFindOneInterface
{

    public function execute(int $id): Bill
    {
        return Bill::findOrFail($id);
    }
}
