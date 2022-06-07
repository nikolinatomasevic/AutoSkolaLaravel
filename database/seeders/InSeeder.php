<?php

namespace Database\Seeders;

use App\Models\Instruktor;
use Illuminate\Database\Seeder;

class InSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Instruktor::factory()->count(80)->create();
    }
}
