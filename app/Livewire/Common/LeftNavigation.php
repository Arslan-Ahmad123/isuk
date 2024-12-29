<?php

namespace App\Livewire\Common;

use App\Models\Module;
use App\Traits\RoleTrait;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use App\Helpers\AppConstants as AppConst;

class LeftNavigation extends Component
{
    use RoleTrait;

    public Collection $moduleIds;

    public function render()
    {
        return view(
            'livewire.common.left-navigation',
            [
                'modules' => $this->getAllModules(),
            ]
        );
    }

    public function getAllModules()
    {
        return Cache::rememberForever(AppConst::GET_ROLE_ALL_MODULES.'-'.auth()->user()->role_id, function () {
            return Module::whereHas('permissions', function ($query) {
                $query->whereHas('roles', function ($roleQuery) {
                    $roleQuery->where('roles.id', auth()->user()->role_id);
                });
            })->whereNull('module_id')->where('is_active', 1)->orderBy('name', 'asc')->get() ?? [];
        });
    }
}
