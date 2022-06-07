<?php

namespace Database\Seeders;

use App\Models\Polaznik;
use Illuminate\Database\Seeder;

class PoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Polaznik::factory()->count(100)->create();
    }
}
