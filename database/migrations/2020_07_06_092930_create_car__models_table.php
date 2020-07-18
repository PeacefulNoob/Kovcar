<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car__models', function (Blueprint $table) {
            $table->id();
            $table->integer('manufacturers_id');
            $table->string('title')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('logo_image')->nullable();
            $table->string('brochure_pdf')->nullable();
            $table->string('price_pdf')->nullable();
            $table->string('exterior_desc')->nullable();
            $table->string('exterior_desc1')->nullable();
            $table->string('exterior_image')->nullable();
            $table->string('interior_desc')->nullable();
            $table->string('interior_desc1')->nullable();
            $table->string('interior_image')->nullable();
            $table->string('sec_desc')->nullable();
            $table->string('sec_image')->nullable();
            $table->string('teh_image')->nullable();
            $table->string('teh_desc')->nullable();
            $table->tinyInteger('isActive')->default('1')->nullable();
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
        Schema::dropIfExists('car__models');
    }
}
