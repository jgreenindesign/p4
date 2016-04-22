<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            # Primary Key for Products Table
            $table->increments('product_id');

            # Timestamp columns for 'created_at' and 'updated_at'
            $table->timestamps();

            #Information about the Customer - Fields for the table
            $table->string('product_name');
            $table->string('product_description');
            $table->decimal('product_weight');
            $table->decimal('product_unit_cost');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}