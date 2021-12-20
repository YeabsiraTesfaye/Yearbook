<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesDepartmentUserYearbookPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('department_user_yearbook', function (Blueprint $table) {
            $table->id();
            $table->string('department');
            $table->bigInteger('yearbook_id')->unsigned()->index()->nullable();
            $table->foreign('yearbook_id')->references('id')->on('yearbooks')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->tinyInteger('role')->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('department_user_yearbook');
    }
}
