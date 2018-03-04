<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('roles')->insert(
            array(
                'name' => 'manager',
                'description' => 'Admistrador'
            )
        );

        DB::table('roles')->insert(
            array(
                'name' => 'worker',
                'description' => 'Voluntário'
            )
        );

        DB::table('roles')->insert(
            array(
                'name' => 'camper',
                'description' => 'Campista'
            )
        );

        DB::table('roles')->insert(
            array(
                'name' => 'visitor',
                'description' => 'Visitante'
            )
        );
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
