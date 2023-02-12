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

    public $nbrCaissier;

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
        // dd($this->validate());
        try {
            Caissier::create([
                'code' => $this->code,
                'nom' => $this->nom,
                'postnom' => $this->postnom,
                'compteUSD' => '57.' . $this->nbrCaissier . '1',
                'compteCDF' => '57.' .  $this->nbrCaissier . '2',
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
            return redirect()->to(route('caissier'));
        } catch (\Exception $e) {
            // Set Flash Message
            $this->alert('warning', 'Echec d\'enregistrement: ' . $e->getMessage());

            // $this->reset_fields();
        }
    }
    public function mount()
    {
        $this->nbrCaissier = Caissier::count();
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pin = mt_rand(1000, 9999) . $characters[rand(0, strlen('ABCDEFGHIJKLMNOPQRSTUVWXYZ') - 1)];
        $this->code = 'C-' . str_shuffle($pin);
    }
    public function render()
    {
        return view('livewire.caissier.add-caissier');
    }
}