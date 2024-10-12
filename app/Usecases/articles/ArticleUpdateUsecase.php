<?php

namespace App\Usecases\articles;

use App\Http\Requests\articles\ArticleRequest;
use App\Models\Article;
use App\Repositories\articles\ArticleUpdateRepository;

class ArticleUpdateUsecase
{
    private ArticleUpdateRepository $articleUpdateRepository;
    public function __construct(ArticleUpdateRepository $articleUpdateRepository)
    {
        $this->articleUpdateRepository = $articleUpdateRepository;
    }

    public function execute (ArticleRequest $articleRequest, int $id) : Article
    {
        return $this->articleUpdateRepository->execute($articleRequest, $id);
    }
}
