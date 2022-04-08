<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('product', 30);
            $table->text('descripcion', 100);
            
            //$table->integer('id_category')->unsigned();
            //$table->integer('id_office')->unsigned();
            
            $table->unsignedBigInteger('id_category');
            $table->unsignedBigInteger('id_office');
            
            $table->float('price');
            $table->dateTime('buy_date');
            $table->timestamps();
            
            $table->foreign('id_category')->references('id')->on('category');
            $table->foreign('id_office')->references('id')->on('office');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
