<?php

namespace App\Traits;

use App\Helpers\AppConstants as AppConst;
use App\Models\Page;
use Illuminate\Support\Facades\Cache;

trait PageTrait
{
    public function allPages()
    {
        return Cache::rememberForever(AppConst::ALL_PAGES, function () {
            return Page::all();
        });
    }
}
