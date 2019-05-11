<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Speciality');
            $table->string('graduation');
            $table->string('post_graduation');
            $table->string('skill');
            $table->string('graduationFrom');
            $table->string('post_graduationFrom');
            $table->string('workPlace');
            $table->string('designation');
            $table->text('image');
            $table->integer('doctorId');
            $table->tinyinteger('status')->default(0);
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
        Schema::dropIfExists('doctor_profiles');
    }
}
