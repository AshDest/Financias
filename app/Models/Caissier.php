<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caissier extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'nom',
        'postnom',
        'compteUSD',
        'compteCDF',
        'montantCDF',
        'montantUSD',
    ];
}