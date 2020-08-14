<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('cover_image_text')->nullable();

            $table->string('cover_image1')->nullable();
            $table->string('cover_image1_text')->nullable();

            $table->string('cover_image2')->nullable();
            $table->string('cover_image2_text')->nullable();

            $table->integer('car_model_id')->nullable();
            $table->integer('manufacturer_id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slider');
    }
}
