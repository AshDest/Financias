<?php

namespace App\Http\Livewire\Changes;

use App\Models\Approvisionnement;
use App\Models\Caissier;
use App\Models\Taux;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Menus extends Component
{

    use WithPagination;
    use LivewireAlert;

    public  $reseach, $page_active = 4;
    public $formapprovisionnement = null;
    public $formsortie = null;

    public $tab1 = 1;
    public $tab2 = null;
    public $tab3 = null;
    public $tab4 = null;

    public $fournisseur;
    public $montantusd = 0;
    public $montantcdf = 0;

    public $taux;

    public $valeurUSD;
    public $valeurCDF;

    public $taux_jours = 0;

    public $caisseCDF = 0;
    public $caisseUSD = 0;

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
    public function updatedMontantusd()
    {
        if ($this->montantusd) {
            $this->valeurCDF = $this->montantusd * $this->taux_jours;
        } else {
            $this->valeurCDF = 0;
        }
    }
    public function updatedMontantcdf()
    {
        if ($this->montantcdf) {
            $this->valeurUSD = $this->montantcdf / $this->taux_jours;
        } else {
            $this->valeurUSD = 0;
        }
    }
    public function mount()
    {
        $this->formapprovisionnement = 1;
        $vars = Taux::orderby('created_at', 'DESC')->first();
        if ($vars) {
            $this->taux_jours = $vars->taux;
        }
    }
    public function approv()
    {
        // try {
        if ($this->montantusd && $this->montantcdf) {
            Approvisionnement::create([
                'fournisseur' => $this->fournisseur,
                'montantCDF' => $this->montantcdf,
                'valeurenCDF' => $this->valeurCDF,
                'montantUSD' => $this->montantusd,
                'valeurenUSD' => $this->valeurUSD,
                'taux' => $this->taux_jours,
                'caisse_id' => 1,
                // Auth::user()->caissier_id,
            ])->save();
            Caissier::find(Auth::user()->caissier_id)->fill([
                'montantCDF' => $this->caisseCDF + $this->montantcdf,
                'montantUSD' => $this->caisseUSD + $this->montantusd,
            ])->save();
        } elseif ($this->montantusd) {
            Approvisionnement::create([
                'fournisseur' => $this->fournisseur,
                'valeurenCDF' => $this->valeurCDF,
                'montantUSD' => $this->montantusd,
                'taux' => $this->taux_jours,
                'caisse_id' => 1,
            ])->save();
            Caissier::find(Auth::user()->caissier_id)->fill([
                'montantUSD' => $this->caisseUSD + $this->montantusd,
            ])->save();
        } elseif ($this->montantcdf) {
            Approvisionnement::create([
                'fournisseur' => $this->fournisseur,
                'montantCDF' => $this->montantcdf,
                'valeurenUSD' => $this->valeurUSD,
                'taux' => $this->taux_jours,
                'caisse_id' => 1,
            ])->save();
            Caissier::find(Auth::user()->caissier_id)->fill([
                'montantCDF' => $this->caisseCDF + $this->montantcdf,
            ])->save();
        }
        $this->alert('success', 'Initialisation successful');
        $this->clearVariables();
        // } catch (\Exception $e) {
        //     $this->alert('warning', 'Echec d\'enregistrement: ' . $e->getMessage());
        // }
    }
    public function clearVariables()
    {
        $this->fournisseur = '';
        $this->montantcdf = 0;
        $this->valeurCDF = 0;
        $this->montantusd = 0;
        $this->valeurUSD = 0;
    }
    public function render()
    {
        // $approvs = Approvisionnement::all();
        return view('livewire.changes.menus', [
            'approvs' => Approvisionnement::orderBy('created_at', 'DESC')->paginate($this->page_active)
        ]);
    }
}