<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('authors');
            $table->integer('isbn')->unique();;            
            $table->string('copyright');
            $table->integer('year');
            $table->string('country');
            $table->text('category');
            $table->string('publisher');
            $table->string('language');
            $table->integer('amount')->nullable();
            $table->string('cover')->nullable();
            $table->string('edition')->nullable();
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
        Schema::dropIfExists('books');
    }
}
