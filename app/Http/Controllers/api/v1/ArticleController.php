<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\articles\ArticleRequest;
use App\Http\Resources\ArticleResource;
use App\Usecases\articles\ArticleCreateUsecase;
use App\Usecases\articles\ArticleDeleteUsecase;
use App\Usecases\articles\ArticleUpdateUsecase;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends Controller
{
    private ArticleCreateUsecase $articleCreateUsecase;
    private ArticleUpdateUsecase $articleUpdateUsecase;
    private ArticleDeleteUsecase $articleDeleteUsecase;
    public function __construct (
        ArticleCreateUsecase $articleCreateUsecase,
        ArticleUpdateUsecase $articleUpdateUsecase,
        ArticleDeleteUsecase $articleDeleteUsecase
    )
    {
        $this->articleCreateUsecase = $articleCreateUsecase;
        $this->articleUpdateUsecase = $articleUpdateUsecase;
        $this->articleDeleteUsecase = $articleDeleteUsecase;
    }

    public function create(ArticleRequest $articleRequest) : JsonResponse
    {
        return new JsonResponse(
            data: new ArticleResource($this->articleCreateUsecase->execute($articleRequest)),
            status: Response::HTTP_CREATED
        );
    }

    public function update(ArticleRequest $articleRequest, int $id) : JsonResponse
    {
        return new JsonResponse(
            data: new ArticleResource($this->articleUpdateUsecase->execute($articleRequest, $id)),
            status: Response::HTTP_OK
        );
    }

    public function destroy(int $id) : JsonResponse
    {
        return new JsonResponse(
            data: new ArticleResource($this->articleDeleteUsecase->execute($id)),
            status: Response::HTTP_OK
        );
    }
}
