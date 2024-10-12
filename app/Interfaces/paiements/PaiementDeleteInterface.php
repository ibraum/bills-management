<?php

namespace App\Interfaces\paiements;

use App\Models\Paiement;

interface PaiementDeleteInterface
{
    public function execute (int $id) : Paiement;
}
