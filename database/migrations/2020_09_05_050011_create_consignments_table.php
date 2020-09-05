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
            $table->integer('purchase_price');
            $table->integer('con_rate');
            $table->integer('sell_rate_o');
            $table->integer('sell_rate_d');
            $table->integer('discount');
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
