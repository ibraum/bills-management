<?php

namespace App\Interfaces\paiements;

use Illuminate\Database\Eloquent\Collection;

interface PaiementListInterface
{
    public function execute () : Collection;
}
