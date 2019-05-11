<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sex')->nullable();
            $table->integer('age')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('diabetes')->nullable();
            $table->string('blood')->nullable();
            $table->string('presure')->nullable();
            $table->integer('userId');
            $table->tinyinteger('status');
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
        Schema::dropIfExists('patient_profiles');
    }
}
