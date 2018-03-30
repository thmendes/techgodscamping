<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('colors')->insert(array('name' => 'vermelho'));
        DB::table('colors')->insert(array('name' => 'amarelo'));
        DB::table('colors')->insert(array('name' => 'azul'));
        DB::table('colors')->insert(array('name' => 'verde'));
        DB::table('colors')->insert(array('name' => 'laranja'));
        DB::table('colors')->insert(array('name' => 'roxo'));
        DB::table('colors')->insert(array('name' => 'oliva'));
        DB::table('colors')->insert(array('name' => 'celeste'));
        DB::table('colors')->insert(array('name' => 'violeta'));
        DB::table('colors')->insert(array('name' => 'rosa'));
        DB::table('colors')->insert(array('name' => 'turquesa'));
        DB::table('colors')->insert(array('name' => 'preto'));
        DB::table('colors')->insert(array('name' => 'branco'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colors');
    }
}
