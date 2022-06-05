<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SpoljniKljucPevac extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('koncerts', function (Blueprint $table) {
            $table->after('hala_id', function ($table) {
                $table->bigInteger('pevac_id')->unsigned()->index();
                $table->foreign('pevac_id')->references('id')->on('pevacs')->onDelete('cascade');
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
        Schema::table('koncerts', function (Blueprint $table) {
            $table->dropColumn('pevac_id');
        });
    }
}
