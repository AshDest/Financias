<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public  $reseach, $page_active = 4;
    public function render()
    {
        if ($this->reseach) {
            return view('livewire.user.users', [
                'users' => User::where('name', 'LIKE', '%' . $this->reseach . '%')
                    ->orwhere('email', 'LIKE', '%' . $this->reseach . '%')
                    ->orwhere('password', 'LIKE', '%' . $this->reseach . '%')
                    ->where('caissier_id' == 1)
                    ->paginate($this->page_active)
            ]);
        } else {
            return view('livewire.user.users', [
                'users' => User::orderBy('created_at', 'DESC')->paginate($this->page_active)
            ]);
        }
    }
}