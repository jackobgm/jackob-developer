<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\Controller;
use App\Models\User;

class FormRegister extends Component
{

	public $first_name;
	public $last_name;
	public $password;
    public $email;

    protected $rules = [
        'first_name' => 'required|min:3',
        'last_name' => 'required|min:3',
        'password' => 'required|min:8',
        'email' => 'required|email',
    ];

    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'password' => password_hash($this->password, PASSWORD_DEFAULT),
        ]);

        return redirect('/')->with('successRegister', 'User successfully registered.');
    }

    public function render()
    {
        return view('livewire.form-register');
    }
}
