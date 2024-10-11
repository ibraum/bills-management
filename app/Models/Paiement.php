<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Paiement extends Model
{
    use HasFactory;

    protected $primaryKey = 'paiement_id';

    protected $fillable = [
        'facture_id',
        'montant',
        'date_paiement',
        'moyen_paiement'
    ];

    public function bill () : BelongsTo
    {
        return $this->belongsTo(Bill::class, 'bill_id', 'bill_id');
    }
}
