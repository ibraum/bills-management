<?php

namespace App\Repositories\paiements;

use App\Http\Requests\paiements\PaiementUpdateRequest;
use App\Interfaces\paiements\PaiementUpdateInterface;
use App\Models\Paiement;

class PaiementUpdateRepository implements PaiementUpdateInterface
{

    public function execute(PaiementUpdateRequest $paiementUpdateRequest, int $id): Paiement
    {
        $paiement = Paiement::findOrFail($id);
        $paiement->montant = $paiementRequest->montant ?? $paiement->montant;
        $paiement->date_paiement = $paiementRequest->date_paiement ?? $paiement->date_paiement;
        $paiement->moyen_paiement = $paiementRequest->moyen_paiement ?? $paiement->moyen_paiement;
        $paiement->save();

        return $paiement;
    }
}
