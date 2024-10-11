<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BillResource extends JsonResource
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
            'reference' => $this->reference,
            'user_id' => $this->user_id,
            'date_emission' => $this->date_emission,
            'date_echeance' => $this->date_echeance,
            'statut' => $this->statut,
            'total_ht' => $this->total_ht,
            'taux_tva' => $this->taux_tva,
            'total_tva' => $this->total_tva,
            'total_ttc' => $this->total_ttc
        ];
    }
}
