<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{
	    DB::table('customers')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'name' => 'Dohn Joe',
	        'user_id' => 1,
	        'city' => 'Aldera',
	        'state' => 'Alderaan',
	        'zip' => '12345',
	        'phone' => '555-1212',
	        'email' => 'dohnjoe@mail.com',
	    ]);


	    DB::table('customers')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'name' => 'Jane Doe',
	        'user_id' => 2,
	        'city' => 'Tipoca City',
	        'state' => 'Kaminoan',
	        'zip' => '23456',
	        'phone' => '555-2121',
	        'email' => 'janedoe@mail.com',
	    ]);

	    DB::table('customers')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'name' => 'Alex Weir',
	        'user_id' => 1,
	        'city' => 'Cloud City',
	        'state' => 'Bespin',
	        'zip' => '45678',
	        'phone' => '555-2323',
	        'email' => 'alexweir@mail.com',
	    ]);

	    DB::table('customers')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'name' => 'Angela Green',
	        'user_id' => 2,
			'city' => 'Mos Eisley',
	        'state' => 'Tatooine',
	        'zip' => '98765',
	        'phone' => '555-8989',
	        'email' => 'angelagreen@mail.com',
	    ]);
	}
}
