<?php

namespace App\Http\Livewire\Changes;

use App\Models\Taux as ModelsTaux;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Taux extends Component
{
    use LivewireAlert;
    public $taux;
    public $types;

    public function save()
    {
        try {
            ModelsTaux::create([
                'taux' => $this->taux,
                'types' => $this->types,
            ])->save();
            $this->alert('success', 'Taux successful');
            return redirect()->to(route('changesmenus'));
        } catch (\Throwable $e) {
            // Set Flash Message
            $this->alert('warning', 'Echec d\'enregistrement: ' . $e->getMessage());
            // $this->reset_fields();
        }
    }
    public function mount()
    {
        $vars = ModelsTaux::orderby('created_at', 'DESC')->first();
        if ($vars) {
            $this->taux = $vars->taux;
            $this->types = $vars->types;
        }
    }
    public function render()
    {
        return view('livewire.changes.taux');
    }
}
