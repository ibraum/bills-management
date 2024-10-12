<?php

namespace App\Repositories\articles;

use App\Http\Requests\articles\ArticleRequest;
use App\Interfaces\articles\ArticleUpdateInterface;
use App\Models\Article;

class ArticleUpdateRepository implements ArticleUpdateInterface
{

    public function execute(ArticleRequest $articleRequest, int $id): Article
    {
        $article = Article::findOrFail($id);
        $article->bill_id = $articleRequest->input('bill_id') ?? $article->bill_id;
        $article->nom_article = $articleRequest->input('nom_article') ?? $article->nom_article;
        $article->quantite = $articleRequest->input('quantite') ?? $article->quantite;
        $article->prix_unitaire = $articleRequest->input('prix_unitaire') ?? $article->prix_unitaire;
        $article->total_article = $articleRequest->input('total_article') ?? $article->total_article;
        $article->update();

        return $article;
    }
}
