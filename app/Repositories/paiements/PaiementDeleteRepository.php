<?php

namespace App\Repositories\paiements;

use App\Interfaces\paiements\PaiementDeleteInterface;
use App\Models\Paiement;

class PaiementDeleteRepository implements PaiementDeleteInterface
{

    public function execute(int $id): Paiement
    {
        $paiement = Paiement::findOrFail($id);
        $paiementDel = $paiement;
        $paiement->delete();

        return $paiementDel;
    }
}
