<?php

namespace App\Repositories\bills;

use App\Enum\BillStatutEnum;
use App\Interfaces\bills\BillCreateInterface;
use App\Interfaces\bills\BillDeleteInterface;
use App\Models\Bill;

class BillDenyRepository implements BillDeleteInterface
{

    public function execute(int $id): Bill
    {
        $status = BillStatutEnum::ANNULE;
        $bill = Bill::findOrFail($id);
        $bill->status = $status;
        $bill->save();

        return $bill;
    }
}
