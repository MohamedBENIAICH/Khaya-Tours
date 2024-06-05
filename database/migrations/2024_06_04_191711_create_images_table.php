<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('destination_id');
            $table->string('image_path');
            $table->timestamps();

            $table->foreign('destination_id')->references('id')->on('destinations')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('images');
    }
}
