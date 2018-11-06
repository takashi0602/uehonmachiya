<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArrivalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arrival', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('arrival_id')->unsigned();
            $table->integer('products_id')->unsigned();
            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');
            $table->integer('suppliers_id')->unsigned();
            $table->foreign('suppliers_id')->references('id')->on('suppliers')->onDelete('cascade');
            $table->integer('amount');
            $table->boolean('status');
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
        Schema::dropIfExists('arrival');
    }
}
