<?php

namespace Database\Seeders;

use Database\Seeders\Categories\CategorySeeder;
use Database\Seeders\Categories\GradeSeeder;
use Database\Seeders\Categories\PositionSeeder;
use Database\Seeders\HolidaySeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,

        ]);
    }
}
