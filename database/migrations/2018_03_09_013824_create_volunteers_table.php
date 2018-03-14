<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('document');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->date('born');
            $table->string('street');
            $table->string('city');
            $table->string('province');
            $table->string('parent');
            $table->string('parent_phone');
            $table->string('medicine');
            $table->string('shirt');
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
        Schema::dropIfExists('volunteers');
    }
}
