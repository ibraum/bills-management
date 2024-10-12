<?php

namespace App\Interfaces\paiements;

use App\Http\Requests\paiements\PaiementUpdateRequest;
use App\Models\Paiement;

interface PaiementUpdateInterface
{
    public function execute (PaiementUpdateRequest $paiementUpdateRequest, int $id) : Paiement;
}
