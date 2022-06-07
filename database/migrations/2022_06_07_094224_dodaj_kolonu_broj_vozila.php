<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DodajKolonuBrojVozila extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('auto_skolas', function (Blueprint $table) {
            $table->after('cena_obuke', function ($table) {
                $table->integer('broj_vozila');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('auto_skolas', function (Blueprint $table) {
            $table->dropColumn('broj_vozila');
        });
    }
}
