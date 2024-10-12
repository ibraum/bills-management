<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\bills\BillChangeStatusRequest;
use App\Http\Requests\bills\BillRequest;
use App\Http\Requests\bills\BillUpdateRequest;
use App\Http\Resources\BillResource;
use App\Usecases\bills\BillChangeStatutUsecase;
use App\Usecases\bills\BIllCreateUsecase;
use App\Usecases\bills\BillDeleteUsecase;
use App\Usecases\bills\BillDenyUsecase;
use App\Usecases\bills\BillFindOneUsecase;
use App\Usecases\bills\BillListUsecase;
use App\Usecases\bills\BillUpdateUsecase;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class BillController extends Controller
{
    private BillChangeStatutUsecase $billChangeStatutUsecase;
    private BillDeleteUsecase $billDeleteUsecase;
    private BillDenyUsecase $billDenyUsecase;
    private BIllCreateUsecase $BIllCreateUsecase;
    private BillFindOneUsecase $billFindOneUsecase;
    private BillListUsecase $billListUsecase;
    private BillUpdateUsecase $billUpdateUsecase;
    public function __construct(
        BillChangeStatutUsecase $billChangeStatutUsecase,
        BillDeleteUsecase $billDeleteUsecase,
        BillDenyUsecase $billDenyUsecase,
        BIllCreateUsecase $BIllCreateUsecase,
        BillFindOneUsecase $billFindOneUsecase,
        BillListUsecase $billListUsecase,
        BillUpdateUsecase $billUpdateUsecase
    )
    {
        $this->billChangeStatutUsecase = $billChangeStatutUsecase;
        $this->billDeleteUsecase = $billDeleteUsecase;
        $this->billDenyUsecase = $billDenyUsecase;
        $this->billFindOneUsecase = $billFindOneUsecase;
        $this->billListUsecase = $billListUsecase;
        $this->BIllCreateUsecase = $BIllCreateUsecase;
        $this->billUpdateUsecase = $billUpdateUsecase;
    }

    public function index() : JsonResponse
    {
        return new JsonResponse(
            data: BillResource::collection($this->billListUsecase->execute()),
            status: Response::HTTP_OK,
        );
    }

    public function create(BillRequest $billRequest) : JsonResponse
    {
        return new JsonResponse(
            data: new BillResource($this->BIllCreateUsecase->execute($billRequest)),
            status: Response::HTTP_CREATED
        );
    }

    public function show(int $id) : JsonResponse
    {
        return new JsonResponse(
            data: new BillResource($this->billFindOneUsecase->execute($id)),
            status: Response::HTTP_OK
        );
    }

    public function update(BillUpdateRequest $billUpdateRequest, int $id) : JsonResponse
    {
        return new JsonResponse(
            data: new BillResource($this->billUpdateUsecase->execute($billUpdateRequest, $id)),
            status: Response::HTTP_OK
        );
    }

    public function destroy(int $id) :JsonResponse
    {
        return new JsonResponse(
            data: new BillResource($this->billDeleteUsecase->execute($id)),
            status: Response::HTTP_OK
        );
    }

    public function deny (int $id) : JsonResponse
    {
        return new JsonResponse(
            data: new BillResource($this->billDenyUsecase->execute($id)),
            status: Response::HTTP_OK
        );
    }

    public function changeStatus (BillChangeStatusRequest $billChangeStatusRequest, int $id) : JsonResponse
    {
        return new JsonResponse(
            data: new BillResource($this->billChangeStatutUsecase->execute($billChangeStatusRequest, $id)),
            status: Response::HTTP_OK
        );
    }
}
