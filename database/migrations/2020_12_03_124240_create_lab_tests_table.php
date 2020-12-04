<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_tests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('patient_id')->unsigned();
            $table->string("test_name");
            $table->float('amount');
            $table->string('physician')->nullable();
            $table->string('med_tech')->nullable();
            $table->string('pathologist')->nullable();
            $table->string('remarks')->nullable();
            $table->string('status')->default('pending'); //pending, on-going, available
            $table->timestamps();
            $table->foreign('patient_id')->references('id')->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lab_tests');
    }
}
