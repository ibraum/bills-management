<?php

namespace App\Repositories\bills;

use App\Http\Requests\bills\BillRequest;
use App\Interfaces\bills\BillCreateInterface;
use App\Models\Bill;

class BillCreateRepository implements BillCreateInterface
{

    public function execute(BillRequest $billRequest): Bill
    {
        $bill = new Bill();

        $bill->reference = $billRequest->input('reference');
        $bill->user_id = $billRequest->input('user_id');
        $bill->date_emission = $billRequest->input('date_emission');
        $bill->date_echeance = $billRequest->input('date_echeance');
        $bill->statut = $billRequest->input('statut');
        $bill->total_ht = $billRequest->input('total_ht');
        $bill->taux_tva = $billRequest->input('taux_tva');
        $bill->total_tva = $billRequest->input('total_tva');
        $bill->total_ttc = $billRequest->input('total_ttc');
        $bill->description = $billRequest->input('description');
        $bill->save();

        return $bill;
    }
}
