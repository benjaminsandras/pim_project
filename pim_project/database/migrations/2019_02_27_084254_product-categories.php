<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product-categories', function (Blueprint $table) {
            $table->integer('fk_product')->unsigned();
            $table->integer('fk_category')->unsigned();
 
            $table->foreign('fk_product')->references('id')->on('products')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fk_category')->references('id')->on('categories')
                ->onUpdate('cascade')->onDelete('cascade');
 
            $table->primary(['fk_product', 'fk_category']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product-categories');
    }
}
