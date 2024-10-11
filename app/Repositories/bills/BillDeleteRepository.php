<?php

namespace App\Repositories\bills;

use App\Interfaces\bills\BillCreateInterface;
use App\Interfaces\bills\BillDeleteInterface;
use App\Models\Bill;

class BillDeleteRepository implements BillDeleteInterface
{

    public function execute(int $id): Bill
    {
        $bill = Bill::findOrFail($id);
        $oldBill = $bill;

        $bill->delete();
        return $oldBill;
    }
}
