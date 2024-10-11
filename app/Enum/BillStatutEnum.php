<?php

namespace App\Enum;

use Illuminate\Validation\Rules\Enum;

final class BillStatutEnum extends Enum
{
    const EN_ATTENTE = "en attente";
    const PARTIELLEMENT_PAYE = "partiellement payé";
    const PAYE = "payé";
    const ANNULE = "annulé";
}
