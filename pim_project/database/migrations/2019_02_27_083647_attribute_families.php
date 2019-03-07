<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AttributeFamilies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_families', function (Blueprint $table) {
            $table->integer('fk_attribute')->unsigned();
            $table->integer('fk_family')->unsigned();
 
            $table->foreign('fk_attribute')->references('id')->on('attributes')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fk_family')->references('id')->on('families')
                ->onUpdate('cascade')->onDelete('cascade');
 
            $table->primary(['fk_attribute', 'fk_family']);
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
        Schema::drop('attribute_families');
    }
}
