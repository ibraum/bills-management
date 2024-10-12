<?php

namespace App\Repositories\paiements;

use App\Interfaces\paiements\PaiementListInterface;
use App\Models\Paiement;
use Illuminate\Database\Eloquent\Collection;

class PaiementListRepository implements PaiementListInterface
{

    public function execute(): Collection
    {
        return Paiement::all();
    }
}
