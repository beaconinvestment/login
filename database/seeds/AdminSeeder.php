<?php

use Faker\Factory;
use App\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends DatabaseSeeder {

	public function run()
	{
		DB::table('users')->truncate(); // Using truncate function so all info will be cleared when re-seeding.
		DB::table('roles')->truncate();
		DB::table('role_users')->truncate();
		DB::table('activations')->truncate();

		$admin = Sentinel::registerAndActivate(array(
			'email'       => 'admin@admin.com',
			'password'    => "admin",
			'first_name'  => 'John',
			'last_name'   => 'Doe',
		));

		$user = Sentinel::registerAndActivate(array(
		    'email' => 'user@user.com',
            'password' => "user",
            'first_name' => 'user',
            'cell_no' => '03331234567'
        ));

		$adminRole = Sentinel::getRoleRepository()->createModel()->create([
			'name' => 'Admin',
			'slug' => 'admin',
			'permissions' => array('admin' => 1),
		]);

        $userRole = Sentinel::getRoleRepository()->createModel()->create([
			'name'  => 'User',
			'slug'  => 'user',
		]);

		$userRole = Sentinel::getRoleRepository()->createModel()->create([
			'name'  => 'Blogger',
			'slug'  => 'blogger',
		]);


		$admin->roles()->attach($adminRole);
		$user->roles()->attach($userRole);

		$this->command->info('Admin User created with username admin@admin.com and password admin');
	}

}