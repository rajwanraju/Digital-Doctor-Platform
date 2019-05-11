<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversiationAtachmentModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversiation_atachment_models', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ca_conversation_id');
            $table->text('ca_name');
            $table->text('ca_type');
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
        Schema::dropIfExists('conversiation_atachment_models');
    }
}
