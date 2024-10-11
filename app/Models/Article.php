<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;
    protected $primaryKey = 'article_id';

    protected $fillable = [
        'bill_id',
        'nom_article',
        'quantite',
        'prix_unitaire',
        'total_article',
    ];

    public function bill () : BelongsTo
    {
        return $this->belongsTo(Bill::class, 'bill_id', 'bill_id');
    }
}
