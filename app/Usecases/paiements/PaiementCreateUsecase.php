<?php

namespace App\Usecases\paiements;

use App\Http\Requests\paiements\PaiementRequest;
use App\Models\Paiement;
use App\Repositories\paiements\PaiementCreateRepository;

class PaiementCreateUsecase
{
    private PaiementCreateRepository $paiementCreateRepository;
    public function __construct(PaiementCreateRepository $paiementCreateRepository)
    {
        $this->paiementCreateRepository = $paiementCreateRepository;
    }

    public function execute (PaiementRequest $paiementRequest, int $id) : Paiement
    {
        return $this->paiementCreateRepository->execute($paiementRequest, $id);
    }
}
