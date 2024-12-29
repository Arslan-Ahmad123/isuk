<?php

namespace App\Livewire\Common;

use App\Helpers\AppConstants as AppConst;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class Notifications extends Component
{
    use WithPagination;

    public $limit = false;
    public $approval = false;

    public function render()
    {
        return view('livewire.common.notifications')->layout('layouts.dashboard');
    }


}
