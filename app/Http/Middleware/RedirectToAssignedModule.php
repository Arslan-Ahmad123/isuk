<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Module;
use App\Helpers\AppConstants as AppConst;
use Illuminate\Support\Facades\Cache;

class RedirectToAssignedModule
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $modules = Cache::rememberForever(AppConst::GET_ROLE_ALL_SUB_MODULES.'-'.auth()->user()->role_id, function () {
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
        $module = $modules->where('alias', $request?->segment(1))->first();
        if ($module && $module?->subModule?->isNotEmpty()) {
            $subModule = $module?->subModule?->first();
            if ($subModule?->permissions?->isNotEmpty()) {
                $route_name = $subModule?->route_name;
                return redirect()?->route($route_name);
            }
        }

        abort(403, 'Unauthorized action.');
    }
}
