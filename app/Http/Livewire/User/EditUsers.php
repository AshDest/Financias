<?php

namespace App\Http\Livewire\User;

use App\Models\Caisse;
use App\Models\User;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditUsers extends Component
{
    use LivewireAlert;
    public $users, $name, $email, $password, $caissier_id, $password_confirmation;

    public $ids;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,except,id',
        'password' => 'required|string|min:8|confirmed',
        'password_confirmation' => 'required|string|min:8|max:255',
        'caissier_id' => 'required|integer',
    ];

    protected $messages = [
        'name.required' => 'Le champ nom est obligatoire.',
        'name.string' => 'Le champ nom doit être une chaîne de caractères.',
        'name.max' => 'Le champ nom ne doit pas dépasser 255 caractères.',
        'email.required' => 'Le champ e-mail est obligatoire.',
        'email.string' => 'Le champ e-mail doit être une chaîne de caractères.',
        'email.email' => 'Le champ e-mail doit être une adresse e-mail valide.',
        'email.max' => 'Le champ e-mail ne doit pas dépasser 255 caractères.',
        'email.unique' => 'Cette adresse e-mail est déjà utilisée.',
        'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
        'password.confirmed' => 'Les mots de passe ne correspondent pas.',
        'caissier_id.required' => 'Le champ caissier est obligatoire.',
        'caissier_id.integer' => 'Le champ caissier doit être un nombre entier.',
    ];
    // realtime validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        User::find($this->ids)->fill([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'caissier_id' => $this->caissier_id,
        ])->save();
    }

    public function mount()
    {
        $vars = User::find($this->ids);
        $this->name = $vars->name;
        $this->email = $vars->email;
        $this->caissier_id = $vars->caissier_id;
    }
    public function render()
    {
        $caissiers = Caisse::all();
        return view('livewire.user.edit-users', ['caissiers' => $caissiers]);
    }
}