<?php

namespace App\Enum;

use Illuminate\Validation\Rules\Enum;

class PaiementMoyenEnum extends Enum
{
    const CARTE = "carte";
    const VIREMENT = "virement";
    const ESPECE = "espece";
}
