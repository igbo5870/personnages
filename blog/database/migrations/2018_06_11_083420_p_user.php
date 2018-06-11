<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PUser extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('p_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('job');
            $table->string('phone');
            $table->string('mail');
            $table->string('adress');
            $table->string('postalcode');
            $table->string('town');
            $table->text('biography');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('p_user');
    }
}
