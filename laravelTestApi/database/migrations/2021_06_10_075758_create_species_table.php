<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('species', function (Blueprint $table) {
            $table->id();
            $table->integer('average_height');
            $table->integer('average_lifespan');
            $table->string('classification');
            $table->string('designation');
            $table->json('eye_colors');
            $table->json('hair_colors');
            $table->integer('homeworld');
            $table->string('language');
            $table->string('name');
            $table->string('url');
            $table->json('skin_colors');
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
        Schema::dropIfExists('species');
    }
}
