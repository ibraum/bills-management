<?php

namespace App\Repositories\bills;

use App\Http\Requests\bills\BillRequest;
use App\Http\Requests\bills\BillUpdateRequest;
use App\Interfaces\bills\BillCreateInterface;
use App\Interfaces\bills\BillUpdateInterface;
use App\Models\Bill;

class BillUpdateRepository implements BillUpdateInterface
{

    public function execute(BillUpdateRequest $billUpdateRequest, int $id): Bill
    {
        $billUpdate = $billUpdateRequest->validated();
        $bill = Bill::findOrFail($id);
        $bill->reference = $billUpdate['reference'];
        $bill->date_emission = $billUpdate['date_emission'];
        $bill->date_echeance = $billUpdate['date_echeance'];
        $bill->statut = $billUpdate['statut'];
        $bill->total_ht = $billUpdate['total_ht'];
        $bill->taux_tva = $billUpdate['taux_tva'];
        $bill->total_tva = $billUpdate['total_tva'];
        $bill->total_ttc = $billUpdate['total_ttc'];
        $bill->description = $billUpdate['description'];

        $bill->save();

        return $bill;
    }
}
