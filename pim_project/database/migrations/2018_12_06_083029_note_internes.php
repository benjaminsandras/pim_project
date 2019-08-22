<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NoteInternes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note_internes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('note_interne_emetteur');
            $table->string('note_interne_recepteur');
            $table->text('note_interne_commentaire');
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
        Schema::drop('note_internes');
    }
}
