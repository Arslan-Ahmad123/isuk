<?php

namespace App\Livewire\Common;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('livewire.common.header');
    }
    public function logout()
    {
        Auth::guard('web')->logout();
        Session::forget('user_time_zone');
        return redirect()->route('login');
    }
}
