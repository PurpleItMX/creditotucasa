<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_types', function (Blueprint $table) {
            $table->increments('id_credit_type');
            $table->string('name');
            $table->string('description');
            $table->string('url_img');
            $table->smallInteger('estatus');
            $table->timestamps();

            /*$table->foreign('id_house')->references('id_house')->on('houses');
        Schema::enableForeignKeyConstraints();*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credit_types');
    }
}
