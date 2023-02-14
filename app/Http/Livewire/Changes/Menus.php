<?php

namespace App\Http\Livewire\Changes;

use Livewire\Component;

class Menus extends Component
{

    public $formapprovisionnement = null;
    public $formsortie = null;

    public $fournisseur;
    public $montant_approvCDF;
    public $taux;
    public $valeurUSD;



    public function approvisionnements()
    {
        $this->formapprovisionnement = 1;
        $this->formsortie = null;
    }

    public function sorties()
    {
        $this->formsortie = 1;
        $this->formapprovisionnement = null;
    }

    public function mount()
    {
        $this->formapprovisionnement = 1;
    }
    public function render()
    {
        return view('livewire.changes.menus');
    }
}