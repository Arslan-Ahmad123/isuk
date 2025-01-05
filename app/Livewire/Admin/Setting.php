<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Setting extends Component
{
    public $email;
    public $password;
    public $password_confirmation;

    public function mount()
    {
        $this->email = Auth::user()->email;
    }

    public function updateSettings()
    {
        $this->validate([
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'password' => 'nullable|min:8|confirmed',
        ]);

        $user = Auth::user();
        $user->email = $this->email;

        if ($this->password) {
            $user->password = Hash::make($this->password);
        }

        $user->save();

        session()->flash('message', 'Settings updated successfully.');
    }
    public function render()
    {
        return view('livewire.admin.setting')->layout('layouts.dashboard');
    }
}
