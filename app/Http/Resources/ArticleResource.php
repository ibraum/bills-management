<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'facture_id' => $this->facture_id,
            'nom_article' => $this->nom_article,
            'quantite' => $this->quantite,
            'prix_unitaire' => $this->prix_unitaire,
            'total_article' =>$this->total_article
        ];
    }
}
