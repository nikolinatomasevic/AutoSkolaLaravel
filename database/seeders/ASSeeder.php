<?php

namespace Database\Seeders;

use App\Models\AutoSkola;
use Illuminate\Database\Seeder;

class ASSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AutoSkola::factory()->count(50)->create();
    }
}
