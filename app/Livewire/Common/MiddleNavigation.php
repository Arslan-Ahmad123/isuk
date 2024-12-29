<?php

namespace App\Livewire\Common;

use App\Models\Module;
use Livewire\Attributes\On;
use Livewire\Component;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Collection;
use App\Helpers\AppConstants as AppConst;
use Illuminate\Support\Facades\Cache;

class MiddleNavigation extends Component
{
    public int $id = 0;

    public function render()
    {

        return view('livewire.common.middle-navigation', [
            'subModules' => $this->getAllSubModules(),
            'alias' => $this->getCurrentPath(),
        ]);
    }

    private function getCurrentPath()
    {
        return Route::currentRouteName();
    }

    #[On('getSubModules')]
    public function getSubModules(int $id = 0): void
    {
        $this->id = $id;
    }

    public function getAllSubModules(): Collection|array
    {
        $routeName = request()->segment(1);
        $modules = Cache::rememberForever(AppConst::GET_ROLE_ALL_SUB_MODULES.'-'.auth()->user()->role_id, function () use ($routeName) {
            return Module::whereHas('subModule')
            ->with(['subModule' => function ($q) {
                $q->whereHas('permissions', function ($qr) {
                    $qr->whereHas('roles', function ($qt) {
                        $qt->where('roles.id', auth()->user()->role_id);
                    });
                });
            }])
            ->get();
        });
        return $modules->where('alias', $routeName)->first()?->subModule ?? [];
    }
}
