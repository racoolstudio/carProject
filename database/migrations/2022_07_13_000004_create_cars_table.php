<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('manufacturer_id');
            $table->integer('year_id');
            $table->integer('model_id');
            $table->integer('color_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
