<?php

namespace App\Repositories\articles;

use App\Http\Requests\articles\ArticleRequest;
use App\Interfaces\articles\ArticleCreateInterface;
use App\Models\Article;

class ArticleCreateRepository implements ArticleCreateInterface
{

    public function execute(ArticleRequest $articleRequest): Article
    {
        $article = new Article();
        $article->bill_id = $articleRequest->input('bill_id');
        $article->nom_article = $articleRequest->input('nom_article');
        $article->quantite = $articleRequest->input('quantite');
        $article->prix_unitaire = $articleRequest->input('prix_unitaire');
        $article->total_article = $articleRequest->input('total_article');

        $article->save();
        return $article;
    }
}
