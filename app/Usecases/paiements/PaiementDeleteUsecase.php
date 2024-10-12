<?php

namespace App\Usecases\paiements;

use App\Models\Paiement;
use App\Repositories\paiements\PaiementDeleteRepository;

class PaiementDeleteUsecase
{
    private PaiementDeleteRepository $paiementDeleteRepository;
    public function __construct(PaiementDeleteRepository $paiementDeleteRepository)
    {
        $this->paiementDeleteRepository = $paiementDeleteRepository;
    }

    public function execute (int $id) : Paiement
    {
        return $this->paiementDeleteRepository->execute($id);
    }
}
