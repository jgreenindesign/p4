<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            # Primary Key for Customers Table
            $table->increments('customer_id');

            # Timestamp columns for 'created_at' and 'updated_at'
            $table->timestamps();

            #Information about the Customer - Fields for the table
            $table->string('customer_name');
            $table->string('customer_city');
            $table->string('customer_state');
            $table->string('customer_zip');
            $table->string('customer_phone');
            $table->string('customer_email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customers');
    }
}