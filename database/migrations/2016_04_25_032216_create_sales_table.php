<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            # Primary Key for Products Table
            $table->increments('sales_id');

            # Timestamp columns for 'created_at' and 'updated_at'
            $table->timestamps();

            #Information about the Customer - Fields for the table
            $table->string('sales_product_id');
            $table->decimal('sales_product_total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sales');
    }
}
