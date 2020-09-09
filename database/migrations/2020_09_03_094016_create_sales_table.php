<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('isbn');
            $table->string('title');
            $table->string('batch');
            $table->float('rate');
            $table->string('currency');
            $table->integer('balance');
            $table->integer('copy');
            $table->float('publisher_price');
            $table->float('unit_price');
            $table->float('total_price');
            $table->float('discount')->default(0);            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
