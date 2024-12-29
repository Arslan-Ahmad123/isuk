<?php

namespace Database\Seeders;

use App\Helpers\AppConstants as AppConst;
use App\Models\Branch;
use App\Models\Department;
use App\Models\Position;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        if (User::exists()) {
            return;
        }
        User::create([
            'first_name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'role_id' =>  '1',
            'status' => 1
        ]);
    }
}
