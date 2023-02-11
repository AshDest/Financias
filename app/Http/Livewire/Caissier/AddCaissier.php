<?php

namespace App\Http\Livewire\Caissier;

use App\Models\Caissier;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddCaissier extends Component
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

    protected $rules = [
        'code' => 'required',
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
    public function save()
    {
        $this->validate();
        // Validate Form Request
        try {
            Caissier::create([
                'code' => $this->code,
                'nom' => $this->nom,
                'postnom' => $this->postnom,
                'compteUSD' => $this->compteUSD,
                'compteCDF' => $this->compteCDF,
                'montantCDF' => $this->montantCDF,
                'montantUSD' => $this->montantUSD,
            ])->save();
            // Caissier::find($this->ids)->fill([
            //     'qte_stock' => ($this->currentQte + $this->qte_approv),
            //     'pu_achat' => $this->pu_approv,
            //     'pu' => $this->pu_vente,
            // ])->save();
            // Set Flash Message
            $this->alert('success', 'Initialisation successful');

            return redirect()->to(route('listapprovisionnement'));
        } catch (\Exception $e) {
            // Set Flash Message
            $this->alert('warning', 'Echec d\'enregistrement: ' . $e->getMessage());

            // $this->reset_fields();
        }
    }
    public function render()
    {
        return view('livewire.caissier.add-caissier');
    }
}