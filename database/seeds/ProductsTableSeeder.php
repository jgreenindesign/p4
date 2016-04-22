<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('products')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'product_name' => 'R2 Unit',
	        'product_description' => 'White, blue, and silver unit, can be used on numerious sensors',
	        'product_weight' => 1.5,
	        'product_unit_cost' => 10.99,
	    ]);
    }
}
