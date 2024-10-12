<?php

namespace App\Usecases\paiements;

use App\Repositories\paiements\PaiementListRepository;
use Illuminate\Database\Eloquent\Collection;

class PaiementListUsecase
{
    private PaiementListRepository $paiementListRepository;
    public function __construct(PaiementListRepository $paiementListRepository)
    {
        $this->paiementListRepository = $paiementListRepository;
    }

    public function execute () : Collection
    {
        return $this->paiementListRepository->execute();
    }
}
