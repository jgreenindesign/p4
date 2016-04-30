<?php

use Illuminate\Database\Seeder;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('sales')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'customer_id' => 1,
	        'sales_product_id' => 1,
	        'sales_product_total' => 10.99,
	    ]);

        DB::table('sales')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'customer_id' => 1,
            'sales_product_id' => 2,
            'sales_product_total' => 19.99,
        ]);

        DB::table('sales')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'customer_id' => 2,
            'sales_product_id' => 1,
            'sales_product_total' => 10.99,
        ]);

        DB::table('sales')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'customer_id' => 2,
            'sales_product_id' => 2,
            'sales_product_total' => 19.99,
        ]);


        DB::table('sales')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'customer_id' => 3,
            'sales_product_id' => 1,
            'sales_product_total' => 10.99,
        ]);

        DB::table('sales')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'customer_id' => 3,
            'sales_product_id' => 2,
            'sales_product_total' => 19.99,
        ]);

        DB::table('sales')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'customer_id' => 4,
            'sales_product_id' => 1,
            'sales_product_total' => 10.99,
        ]);

        DB::table('sales')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'customer_id' => 4,
            'sales_product_id' => 2,
            'sales_product_total' => 19.99,
        ]);

        DB::table('sales')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'customer_id' => 5,
            'sales_product_id' => 1,
            'sales_product_total' => 10.99,
        ]);

        DB::table('sales')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'customer_id' => 5,
            'sales_product_id' => 2,
            'sales_product_total' => 19.99,
        ]);

        DB::table('sales')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'customer_id' => 6,
            'sales_product_id' => 1,
            'sales_product_total' => 10.99,
        ]);

        DB::table('sales')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'customer_id' => 6,
            'sales_product_id' => 2,
            'sales_product_total' => 19.99,
        ]);


    }
}
