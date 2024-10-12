<?php

namespace App\Interfaces\articles;

use App\Http\Requests\articles\ArticleRequest;
use App\Models\Article;

interface ArticleUpdateInterface
{
    public function execute (ArticleRequest $articleRequest, int $id) : Article;
}
