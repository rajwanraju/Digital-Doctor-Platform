<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEPrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_prescriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patientId');
            $table->integer('doctorId');
            $table->string('diseases_title');
            $table->string('drug1')->nuallable();
            $table->string('rule1')->nuallable();
            $table->string('drug2')->nuallable();
            $table->string('rule2')->nuallable();
            $table->string('drug3')->nuallable();
            $table->string('rule3')->nuallable();
            $table->string('drug4')->nuallable();
            $table->string('rule4')->nuallable();
            $table->string('drug5')->nuallable();
            $table->string('rule5')->nuallable();
            $table->string('drug6')->nuallable();
            $table->string('rule6')->nuallable();
            $table->string('drug7')->nuallable();
            $table->string('rule7')->nuallable();
            $table->string('drug8')->nuallable();
            $table->string('rule8')->nuallable();
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
        Schema::dropIfExists('e_prescriptions');
    }
}
