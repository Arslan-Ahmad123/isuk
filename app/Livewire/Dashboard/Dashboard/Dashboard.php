<?php

namespace App\Livewire\Dashboard\Dashboard;

use App\Helpers\AppConstants;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class Dashboard extends Component
{
    public $dashboardPermissions;
    public array $celebrationsToday = [];


    public function mount()
    {

    }



    public function render()
    {
        return view('livewire.dashboard.dashboard.dashboard')
            ->layout('layouts.dashboard');
    }

    #[On('refresh-main-dashboard')]
    public function refreshMainDashboard()
    {
    }

}
