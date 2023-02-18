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
        'valeurenCDF',
        'montantUSD',
        'valeurenUSD',
        'taux',
        'caisse_id'
    ];

    public function caisse()
    {
        return $this->belongsTo(Caisse::class);
    }
}
