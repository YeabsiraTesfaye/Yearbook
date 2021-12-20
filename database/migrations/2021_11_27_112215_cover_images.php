<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CoverImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cover_images', function (Blueprint $table) {
            $table->id();
            $table->string('department');
            $table->bigInteger('yearbook_id')->unsigned()->index()->nullable();
            $table->foreign('yearbook_id')->references('id')->on('yearbooks')->onDelete('cascade');
            $table->tinyInteger('approved')->default(0);
            $table->string('image')->nullable();
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
        Schema::dropIfExists('cover_images');
    }
}
