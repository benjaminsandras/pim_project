<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Attribute extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->string('type')->nullable();
            $table->unsignedInteger('fk_attribute_group')->nullable();
            $table->timestamps();
            $table->foreign('fk_attribute_group')->references('id')->on('attribute_group')
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
        Schema::drop('attribute');
    }
}
