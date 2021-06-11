<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planets', function (Blueprint $table) {
            $table->id();
            $table->string('climate');
            $table->bigInteger('diameter');
            $table->string('gravity');
            $table->string('name');
            $table->bigInteger('orbital_period');
            $table->bigInteger('population');
            $table->bigInteger('rotation_period');
            $table->bigInteger('surface_water');
            $table->string('terrain');
            $table->string('url');
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
        Schema::dropIfExists('planets');
    }
}
