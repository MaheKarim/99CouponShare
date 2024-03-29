<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('product_name');
            $table->text('product_description')->nullable();
            $table->string('product_prize')->nullable();
            $table->string('product_image')->nullable();
            $table->string('product_disscount_prize')->nullable();
            $table->string('product_disscount_rate')->nullable();
            $table->string('product_coupon')->nullable();
            $table->date('availability_date')->nullable();
            $table->integer('category_name_id')->nullable();
            $table->integer('dokan_name_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('area_name_id')->nullable();
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
