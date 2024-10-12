<?php

namespace App\Usecases\articles;

use App\Models\Article;

class ArticleDeleteUsecase
{
    private ArticleDeleteUsecase $articleDeleteUsecase;
    public function __construct(ArticleDeleteUsecase $articleDeleteUsecase)
    {
        $this->articleDeleteUsecase = $articleDeleteUsecase;
    }

    public function execute (int $id) : Article
    {
        return $this->articleDeleteUsecase->execute($id);
    }
}
