<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\paiements\PaiementRequest;
use App\Http\Requests\paiements\PaiementUpdateRequest;
use App\Http\Resources\PaiementResource;
use App\Models\Paiement;
use App\Usecases\paiements\PaiementCreateUsecase;
use App\Usecases\paiements\PaiementDeleteUsecase;
use App\Usecases\paiements\PaiementListUsecase;
use App\Usecases\paiements\PaiementUpdateUsecase;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PaiementController extends Controller
{
    private PaiementCreateUsecase $paiementCreateUsecase;
    private PaiementDeleteUsecase $paiementDeleteUsecase;
    private PaiementListUsecase $paiementListUsecase;
    private PaiementUpdateUsecase $paiementUpdateUsecase;
    public function __construct (
        PaiementCreateUsecase $paiementCreateUsecase,
        PaiementDeleteUsecase $paiementDeleteUsecase,
        PaiementListUsecase $paiementListUsecase,
        PaiementUpdateUsecase $paiementUpdateUsecase
    )
    {
        $this->paiementCreateUsecase = $paiementCreateUsecase;
        $this->paiementListUsecase = $paiementListUsecase;
        $this->paiementUpdateUsecase = $paiementUpdateUsecase;
        $this->paiementDeleteUsecase = $paiementDeleteUsecase;
    }
    public function index() : JsonResponse
    {
        return new JsonResponse(
            data: PaiementResource::collection($this->paiementListUsecase->execute()),
            status: Response::HTTP_OK
        );
    }

    public function create(PaiementRequest $paiementRequest, $id) : JsonResponse
    {
        return new JsonResponse(
            data: new PaiementResource($this->paiementCreateUsecase->execute($paiementRequest, $id)),
            status: Response::HTTP_CREATED
        );
    }

    public function update(PaiementUpdateRequest $paiementUpdateRequest, int $id) : JsonResponse
    {
        return new JsonResponse(
            data: new PaiementResource($this->paiementUpdateUsecase->execute($paiementUpdateRequest, $id)),
            status: Response::HTTP_OK
        );
    }

    public function destroy(int $id) : JsonResponse
    {
        return new JsonResponse(
            data: new PaiementResource($this->paiementDeleteUsecase->execute($id)),
            status: Response::HTTP_OK
        );
    }
}
