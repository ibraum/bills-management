<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bill extends Model
{
    use HasFactory;

    protected $primaryKey = 'bill_id';

    protected $fillable = [
        'reference',
        'client_id',
        'date_emission',
        'date_echeance',
        'statut',
        'total_ht',
        'taux_tva',
        'total_tva',
        'total_ttc',
        'description'
    ];

    public function user () : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function articles () : HasMany
    {
        return $this->hasMany(Article::class, 'bill_id', 'bill_id');
    }

    public function paiements () : HasMany
    {
        return $this->hasMany(Paiement::class, 'bill_id', 'bill_id');
    }
}
