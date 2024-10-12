<?php

namespace App\Repositories\paiements;

use App\Http\Requests\paiements\PaiementRequest;
use App\Interfaces\paiements\PaiementCreateInterface;
use App\Models\Paiement;

class PaiementCreateRepository implements PaiementCreateInterface
{
    public function execute(PaiementRequest $paiementRequest, int $bill_id): Paiement
    {
        $paiement = new Paiement();
        $paiement->bill_id = $bill_id;
        $paiement->montant = $paiementRequest->montant ?? $paiement->montant;
        $paiement->date_paiement = $paiementRequest->date_paiement ?? $paiement->date_paiement;
        $paiement->moyen_paiement = $paiementRequest->moyen_paiement ?? $paiement->moyen_paiement;
        $paiement->save();
        return $paiement;
    }
}
