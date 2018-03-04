<?php

use Illuminate\Database\Seeder;
use App\Role as Role;
use App\Models\User as User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_camper = Role::where('name', 'camper')->first();
        $role_manager = Role::where('name', 'camper')->first();

        $camper = new User();
        $camper->name = 'Camper Name';
        $camper->email = 'camper@example.com';
    	$camper->password = bcrypt('secret');
    	$camper->save();
    	$camper->roles()->attach($role_camper);

    	$manager = new User();
	    $manager->name = 'Manager Name';
	    $manager->email = 'manager@example.com';
	    $manager->password = bcrypt('secret');
	    $manager->save();
	    $manager->roles()->attach($role_manager);
    }
}
