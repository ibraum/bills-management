<?php

namespace App\Interfaces\articles;

use App\Http\Requests\articles\ArticleRequest;
use App\Models\Article;

interface ArticleCreateInterface
{
    public function execute(ArticleRequest $articleRequest) : Article;
}
