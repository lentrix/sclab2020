<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lab_test_id')->unsigned();
            $table->string('item');
            $table->string('normal')->nullable();
            $table->string('result')->nullable();
            $table->timestamps();
            $table->foreign('lab_test_id')->references('id')
                ->on('lab_tests')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_items');
    }
}
