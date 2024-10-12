<?php

namespace App\Repositories\articles;

use App\Interfaces\articles\ArticleDeleteInterface;
use App\Models\Article;

class ArticleDeleteRepository implements ArticleDeleteInterface
{

    public function execute(int $id): Article
    {
       $article = Article::findOrDestroy($id);
       $articleDel = $article;
       $article->delete();
       return $articleDel;
    }
}
