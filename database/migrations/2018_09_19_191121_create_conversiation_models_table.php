<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversiationModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversiation_models', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('conversation_sent_from');
            $table->integer('conversation_sent_to');
            $table->text('conversation_subject');
            $table->text('conversation_body');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('conversiation_models');
    }
}
