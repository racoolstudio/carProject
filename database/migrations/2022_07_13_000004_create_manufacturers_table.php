<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManufacturersTable extends Migration
{
    public function up()
    {
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('manufacturer');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
