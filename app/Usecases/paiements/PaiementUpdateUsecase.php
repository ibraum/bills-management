<?php

namespace App\Usecases\paiements;

use App\Http\Requests\paiements\PaiementRequest;
use App\Http\Requests\paiements\PaiementUpdateRequest;
use App\Models\Paiement;
use App\Repositories\paiements\PaiementUpdateRepository;

class PaiementUpdateUsecase
{
    private PaiementUpdateRepository $paiementUpdateRepository;
    public function __construct(PaiementUpdateRepository $paiementUpdateRepository)
    {
        $this->paiementUpdateRepository = $paiementUpdateRepository;
    }

    public function execute (PaiementUpdateRequest $paiementUpdateRequest, int $id) : Paiement
    {
        return $this->paiementUpdateRepository->execute($paiementUpdateRequest, $id);
    }
}
