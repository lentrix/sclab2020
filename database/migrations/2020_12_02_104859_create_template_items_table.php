<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lbt_template_id')->unsigned();
            $table->string("test");
            $table->string("normal")->nullable();
            $table->timestamps();
            $table->foreign('lbt_template_id')->references('id')->on('lbt_templates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('template_items');
    }
}
