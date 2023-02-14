<?php

namespace App\Http\Livewire\Changes;

use Livewire\Component;

class Menus extends Component
{

    public $formapprovisionnement = null;
    public $formsortie = null;

    public $tab1 = 1;
    public $tab2 = null;
    public $tab3 = null;
    public $tab4 = null;

    public $fournisseur;
    public $montant_approvCDF;
    public $taux;
    public $valeurUSD;


    public function shiftsection($val)
    {
        if ($val == 1) {
            $this->tab1 = 1;
            $this->tab2 = null;
            $this->tab3 = null;
            $this->formapprovisionnement = 1;
            $this->formsortie = null;
        } elseif ($val == 2) {
            $this->tab1 = null;
            $this->tab2 = 1;
            $this->tab3 = null;
            $this->formsortie = 1;
            $this->formapprovisionnement = null;
        } elseif ($val == 3) {
            $this->tab1 = null;
            $this->tab2 = null;
            $this->tab3 = 1;
        }
    }


    // public function mount()
    // {
    //     $this->formapprovisionnement = 1;
    // }
    public function render()
    {
        return view('livewire.changes.menus');
    }
}