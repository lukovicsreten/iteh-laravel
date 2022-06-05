<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KapacitetKolonaHala extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('halas', function (Blueprint $table) {
            $table->after('grad', function ($table) {
                $table->integer('kapacitet');
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
        Schema::table('halas', function (Blueprint $table) {
            $table->dropColumn('kapacitet');
        });
    }
}
