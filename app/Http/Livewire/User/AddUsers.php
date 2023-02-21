<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddUsers extends Component
{
    use LivewireAlert;
    public $users, $name, $email, $password, $caissier_id;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,except,id',
        'password' => 'nullable|string|min:8|confirmed',
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
    public function save()
    {
        try {
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => bcrypt($this->password),
                'caissier_id' => $this->caissier_id,
            ])->save();
            $this->alert('success', 'User enregistrer successful');
            return redirect()->to(route('users'));
        } catch (\Throwable $e) {
            // Set Flash Message
            $this->alert('warning', 'Echec d\'enregistrement: ' . $e->getMessage());
            // $this->reset_fields();
        }
    }

    public function render()
    {
        return view('livewire.user.add-users');
    }
}