<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AttributeGroupFamily extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attibute_group-family', function (Blueprint $table) {
            $table->integer('fk_attribute_group')->unsigned();
            $table->integer('fk_family')->unsigned();
 
            $table->foreign('fk_attribute_group')->references('id')->on('attribute_group')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fk_family')->references('id')->on('family')
                ->onUpdate('cascade')->onDelete('cascade');
 
            $table->primary(['fk_attribute_group', 'fk_family']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Shema::drop('attibute_group-family');
    }
}
