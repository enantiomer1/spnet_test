<?php

use App\User;
use jeremykenedy\LaravelRoles\Models\Role;
use jeremykenedy\LaravelRoles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $userRole = Role::where('name', '=', 'User')->first();
        $adminRole = Role::where('name', '=', 'Admin')->first();
		$permissions = Permission::all();

	    /**
	     * Add Users
	     *
	     */
        if (User::where('email', '=', 'admin@admin.com')->first() === null) {

	        $newUser = User::create([
	            'username' => 'Admin',
	            'email' => 'admin@admin.com',
	            'password' => bcrypt('password'),
	            'confirmed' => 1,
	            'program' => 'AA',
            	'sobriety_date' => '2000-4-25',
            	'zipcode' => '70818',
            	'bio' => 'Big Book oriented, love the steps, email me.',
	        ]);

	        $newUser->attachRole($adminRole);
			foreach ($permissions as $permission) {
				$newUser->attachPermission($permission);
			}

        }

        if (User::where('email', '=', 'user@user.com')->first() === null) {

	        $newUser = User::create([
	            'username' => 'User',
	            'email' => 'user@user.com',
	            'password' => bcrypt('password'),
	            'confirmed' => 1,
	            'program' => 'NA',
            	'sobriety_date' => '2005-9-12',
            	'zipcode' => '70815',
            	'bio' => 'Enjoy working with newcomers and the steps, send me an email.',
	        ]);

	        $newUser;
	        $newUser->attachRole($userRole);

        }

    }
}