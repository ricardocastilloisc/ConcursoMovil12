<?php

use Illuminate\Database\Seeder;
use ConcursoMovil12\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = array(
			[
				'email' 	=> 'admin@admin.com', 
				'name' 		=> 'admin',
				'password' 	=> \Hash::make('admin')
			],
			[
				'email' 	=> 'admin1@admin1.com', 
				'name' 		=> 'admin1',
				'password' 	=> \Hash::make('admin1')
			],

		);

		User::insert($data);
    }
}