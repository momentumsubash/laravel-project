<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */


	public function run()
	{	
		DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => 'secret',

        ]);
        DB::table('sessions')->insert([
            'id' => '11111',
            'payload' => str_random(10).'@gmail.com',
            'last_activity' => '01111',

        ]);
        echo "sucessfully seeded";
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
	}

}
