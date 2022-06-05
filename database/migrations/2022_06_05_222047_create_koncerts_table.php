<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKoncertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('koncerts', function (Blueprint $table) {
            $table->id();
            $table->date('datum');
            $table->integer('cenaKarte');
            $table->bigInteger('hala_id')->unsigned()->index();
            $table->foreign('hala_id')->references('id')->on('halas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('koncerts');
    }
}
