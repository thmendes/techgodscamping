<?php

use Illuminate\Database\Seeder;
use App\Role as Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$role_camper = new Role();
		$role_camper->name = 'camper';
		$role_camper->description = 'A Camper User';
		$role_camper->save();

	    $role_manager = new Role();
    	$role_manager->name = 'manager';
    	$role_manager->description = 'A Manager User';
    	$role_manager->save();
    }
}
