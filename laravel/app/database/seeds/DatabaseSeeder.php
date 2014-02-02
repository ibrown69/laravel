<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');

        $this->command->info('User table seeded!');
    }
    
}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array('id' => '1',
        				   'email' => 'gillian.brown@ankhsystems.co.uk',
        				   'firstname' => 'Gillian',
        				   'surname' => 'Brown'));
        User::create(array('id' => '2',
        				   'email' => 'ian.brown@ankhsystems.co.uk',
        				   'firstname' => 'Ian',
        				   'surname' => 'Brown'));			   
    }
    
}