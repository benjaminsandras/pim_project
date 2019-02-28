<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VariantProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variant_product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->string('image')->nullable();
            $table->string('type')->nullable();
            $table->unsignedInteger('fk_product')->nullable();
            $table->timestamps();
            $table->foreign('fk_product')->references('id')->on('product')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('variant_product');
    }
}
