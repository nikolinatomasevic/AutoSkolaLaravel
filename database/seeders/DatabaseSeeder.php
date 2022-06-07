<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $autoS = new ASSeeder;
        $inS = new InSeeder;
        $poS = new PoSeeder;

        $autoS->run();
        $inS->run();
        $poS->run();
    }
}
