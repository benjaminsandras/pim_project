<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AttributeGroupFamilies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_group_families', function (Blueprint $table) {
            $table->integer('fk_attribute_group')->unsigned();
            $table->integer('fk_family')->unsigned();
 
            $table->foreign('fk_attribute_group')->references('id')->on('attribute_groups')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fk_family')->references('id')->on('families')
                ->onUpdate('cascade')->onDelete('cascade');
 
            $table->primary(['fk_attribute_group', 'fk_family']);
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
        Schema::drop('attribute_group_families');
    }
}
