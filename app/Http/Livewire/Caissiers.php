<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Caissiers extends Component
{
    public $code;
    public $nom;
    public $postnom;
    public $compteUSD;
    public $compteCDF;
    public $montantCDF;
    public $montantUSD;
    public function render()
    {
        return view('livewire.caissiers');
    }
}