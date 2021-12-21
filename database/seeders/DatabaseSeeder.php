<?php

namespace Database\Seeders;

use App\Models\Quarter;
use App\Models\SalaryReview;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(50)->create();
        Quarter::factory(20)->create();
        SalaryReview::factory(20)->create();
    }
}
