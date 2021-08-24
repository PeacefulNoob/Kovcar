<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_packages', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('image')->nullable();
            $table->string('imageD')->nullable();
            $table->string('image1')->nullable();
            $table->string('image1D')->nullable();
            $table->string('image2')->nullable();  
            $table->string('image2D')->nullable();
            $table->string('image3')->nullable();          
            $table->string('image3D')->nullable();
            $table->tinyInteger('isActive')->default('1')->nullable();
            $table->integer('car_models_id');
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
        Schema::dropIfExists('model_packages');
    }
}
