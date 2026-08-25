<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        SiteSetting::current();

        $this->call([
            AdminSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
