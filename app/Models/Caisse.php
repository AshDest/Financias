<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caisse extends Model
{
    use HasFactory;
    protected $fillable = [
        'compteUSD',
        'compteCDF',
        'montantCDF',
        'montantUSD',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}