<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AttributeFamily extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attibute-family', function (Blueprint $table) {
            $table->integer('fk_attribute')->unsigned();
            $table->integer('fk_family')->unsigned();
 
            $table->foreign('fk_attribute')->references('id')->on('attribute')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fk_family')->references('id')->on('family')
                ->onUpdate('cascade')->onDelete('cascade');
 
            $table->primary(['fk_attribute', 'fk_family']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('attribute-family');
    }
}
