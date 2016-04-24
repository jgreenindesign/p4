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
	        'customer_name' => 'Dohn Joe',
	        'user_id' => 1,
	        'customer_city' => 'Aldera',
	        'customer_state' => 'Alderaan',
	        'customer_zip' => '12345',
	        'customer_phone' => '555-1212',
	        'customer_email' => 'dohnjoe@mail.com',
	    ]);


	    DB::table('customers')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'customer_name' => 'Jane Doe',
	        'user_id' => 2,
	        'customer_city' => 'Tipoca City',
	        'customer_state' => 'Kaminoan',
	        'customer_zip' => '23456',
	        'customer_phone' => '555-2121',
	        'customer_email' => 'janedoe@mail.com',
	    ]);

	    DB::table('customers')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'customer_name' => 'Alex Weir',
	        'user_id' => 1,
	        'customer_city' => 'Cloud City',
	        'customer_state' => 'Bespin',
	        'customer_zip' => '45678',
	        'customer_phone' => '555-2323',
	        'customer_email' => 'alexweir@mail.com',
	    ]);

	    DB::table('customers')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'customer_name' => 'Angela Green',
	        'user_id' => 2,
			'customer_city' => 'Mos Eisley',
	        'customer_state' => 'Tatooine',
	        'customer_zip' => '98765',
	        'customer_phone' => '555-8989',
	        'customer_email' => 'angelagreen@mail.com',
	    ]);
	}
}
