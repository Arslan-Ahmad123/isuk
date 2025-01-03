<?php

use App\Helpers\AppConstants as AppConst;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

if (!function_exists('testFunction')) {
    /**
     * This is Test function Just to Show you how functions should be defined
     *
     * @param  string  $name  <p><i>Name</i> Should be string.</p>
     * @param  int  $age  <p><i>Age</i> Should be Integer.</p>
     * @param  mixed  $gender  <p><i>Gender</i> Can be mixed.</p>
     * @return array <p>['name', 'age', 'gender', 'user']</p>
     */
    #[ArrayShape(['name' => 'string', 'age' => 'int', 'gender' => 'mixed', 'user' => 'mixed'])]
    function testFunction(string $name, int $age, mixed $gender): array
    {
        try {
            /* Write Code For Operation */
            $user = \App\Models\User::where('name', $name)->get();
        } catch (\Exception $e) {
            /* Handle The Exception */
            logException($e);
        }

        return ['name' => $name, 'age' => $age, 'gender' => $gender, 'user' => $user];
    }
}
