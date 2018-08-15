<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users')->insert(array(
			'name' => 'yony',
			'email' => 'yonybrondy@gmail.com',
			'password' => \Hash::make('secret'),
			'type' => 'admin'
		));
	}

}