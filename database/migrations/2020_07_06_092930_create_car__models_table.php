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
            $table->string('description1')->nullable();
            $table->string('description2')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('logo_image')->nullable();
            $table->string('brochure_pdf')->nullable();
            $table->string('price_pdf')->nullable();
            $table->string('video_url')->nullable();

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
