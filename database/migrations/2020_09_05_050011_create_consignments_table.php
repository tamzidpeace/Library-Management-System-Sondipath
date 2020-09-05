<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consignments', function (Blueprint $table) {
            $table->id();
            $table->integer('book_id')->unique();
            $table->integer('isbn')->unique();
            $table->integer('copy');
            $table->string('currency');
            $table->float('publisher_price');
            $table->float('cost_price');
            $table->float('sell_price');
            $table->float('con_rate');
            $table->float('sell_rate_o');
            $table->float('sell_rate_d');
            $table->float('discount')->nullable();
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
        Schema::dropIfExists('consignments');
    }
}
