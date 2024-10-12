<?php

namespace App\Interfaces\paiements;

use App\Http\Requests\paiements\PaiementRequest;
use App\Models\Paiement;

interface PaiementCreateInterface
{
    public function execute (PaiementRequest $paiementRequest, int $facture_id) : Paiement;
}
