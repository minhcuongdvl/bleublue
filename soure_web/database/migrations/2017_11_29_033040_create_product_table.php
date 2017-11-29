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
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name')->unique();
            $table->string('product_slug');
            $table->string('product_price');
            $table->string('product_material');
            $table->string('product_size');
            $table->string('product_sizedetail');
            $table->string('product_maker');
            $table->string('product_origin');
            $table->string('product_handing');
            $table->string('product_manufacturing');
            $table->string('product_srandarbs');
            $table->string('product_derector');
            $table->string('product_image');
            $table->integer('product_statsus');
            $table->string('category_product');
            $table->integer('user_id');
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
        Schema::dropIfExists('product');
    }
}
