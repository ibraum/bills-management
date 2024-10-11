<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaiementResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'bill_id' => $this->bill_id,
            'montant' => $this->montant,
            'date_paiement' => $this->date_paiement,
            'moyen_paiement' => $this->moyen_paiement
        ];
    }
}
