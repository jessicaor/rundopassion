<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRandosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('randos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('date');
            $table->integer('heure');
            $table->integer('distance');
            $table->string('image');
            $table->string('description');
            $table->boolean('state')->default(false);
            $table->unsignedInteger('user_id');
            $table->rememberToken();
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
        Schema::dropIfExists('randos');
    }
}
