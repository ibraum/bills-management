<?php

namespace App\Usecases\articles;

use App\Http\Requests\articles\ArticleRequest;
use App\Models\Article;
use App\Repositories\articles\ArticleCreateRepository;

class ArticleCreateUsecase
{
    private ArticleCreateRepository $articleCreateRepository;
    public function __construct(ArticleCreateRepository $articleCreateRepository)
    {
        $this->articleCreateRepository = $articleCreateRepository;
    }

    public function execute (ArticleRequest $articleRequest) : Article
    {
        return $this->articleCreateRepository->execute($articleRequest);
    }
}
