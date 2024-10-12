<?php

namespace App\Interfaces\articles;

use App\Models\Article;

interface ArticleDeleteInterface
{
    public function execute (int $id) : Article;
}
