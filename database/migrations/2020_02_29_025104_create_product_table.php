<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create ('products', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('product_name');
            $table->string('product_description');
            $table->string('product_code');
            $table->string('category');
            $table->integer('selling_price');
            $table->integer('stock');
            $table->integer('created_by');
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
        Schema::dropIfExists('products');
    }
}
