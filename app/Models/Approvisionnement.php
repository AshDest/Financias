<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approvisionnement extends Model
{
    use HasFactory;
    protected $fillable = [
        'fournisseur',
        'montantCDF',
        'montantUSD',
        'taux',
        'caisse_id'
    ];

    public function caisse()
    {
        return $this->belongsTo(Caisse::class);
    }
}