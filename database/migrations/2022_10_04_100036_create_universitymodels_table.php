<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversitymodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universitymodels', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("image");
            $table->string("description");
            $table->integer("cityid");

            $table->foreign('cityid')->references('id')->on('citymodel');
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
        Schema::dropIfExists('universitymodels');
    }
}
