<?php

namespace App\Http\Livewire\Caissier;

use App\Models\Caissier;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditCaissier extends Component
{
    use WithPagination;
    use LivewireAlert;
    public $code;
    public $nom;
    public $postnom;
    public $compteUSD;
    public $compteCDF;
    public $montantCDF;
    public $montantUSD;

    public $ids;

    protected $rules = [
        'nom' => 'required',
        'postnom' => 'required',
        'montantCDF' => 'required',
        'montantUSD' => 'required|regex:/^\d+(\.\d{1,2})?$/',
    ];
    // realtime validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function edit()
    {
        $this->validate();
        try {
            Caissier::find($this->ids)->fill([
                'nom' => $this->nom,
                'postnom' => $this->postnom,
                'montantCDF' => $this->montantCDF,
                'montantUSD' => $this->montantUSD,
            ])->save();
            $this->alert('success', 'Compte modifier avec success');
            return redirect()->to(route('caissier'));
        } catch (\Exception $e) {
            $this->alert('warning', 'Echec d\'enregistrement: ' . $e->getMessage());
        }
    }

    public function mount()
    {
        $vars = Caissier::find($this->ids);
        $this->code = $vars->code;
        $this->nom = $vars->nom;
        $this->postnom = $vars->postnom;
        $this->montantCDF = $vars->montantCDF;
        $this->montantUSD = $vars->montantUSD;
    }
    public function render()
    {
        return view('livewire.caissier.edit-caissier');
    }
}