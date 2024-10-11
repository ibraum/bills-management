<?php

namespace App\Repositories\bills;

use App\Interfaces\bills\BillListInterface;
use App\Models\Bill;
use Illuminate\Database\Eloquent\Collection;

class BillListRepository implements BillListInterface
{

    public function execute(): Collection
    {
        return Bill::all();
    }
}
