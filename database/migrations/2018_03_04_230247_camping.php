<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Camping extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('campings');

        Schema::create('campings', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('description');         
            $table->integer('modality_id');
            $table->date('begin_at');
            $table->date('end_at');
            $table->integer('angels');   
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
        Schema::dropIfExists('campings');
    }
}
