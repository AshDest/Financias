<?php

namespace App\Http\Livewire;

use App\Models\Caissier;
use Livewire\Component;

class Caissiers extends Component
{
    public  $reseach, $page_active = 4;
    public function render()
    {
        // return view('livewire.caissier.caissiers');
        if ($this->reseach) {
            return view('livewire.caissier.caissiers', [
                'casheers' => Caissier::where('code', 'LIKE', '%' . $this->reseach . '%')
                    ->orwhere('nom', 'LIKE', '%' . $this->reseach . '%')
                    ->orwhere('postnom', 'LIKE', '%' . $this->reseach . '%')
                    ->orwhere('compteUSD', 'LIKE', '%' . $this->reseach . '%')
                    ->orwhere('compteCDF', 'LIKE', '%' . $this->reseach . '%')
                    ->paginate($this->page_active)
            ]);
        } else {
            return view('livewire.caissier.caissiers', [
                'casheers' => Caissier::orderBy('created_at', 'DESC')->paginate($this->page_active)
            ]);
        }
    }
}