<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('car', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId');
            $table->string('brand');
            $table->string('model');
            $table->string('modelDetail');
            $table->string('plate');
            $table->string('km');
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
        //
    }
}
