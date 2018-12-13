<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house_images', function (Blueprint $table) {
            $table->increments('id_house_image');
            $table->integer('id_house')->unsigned();
            $table->smallInteger('is_default');
            $table->smallInteger('url_img');
            $table->smallInteger('estatus');
            $table->timestamps();

            $table->foreign('id_house')->references('id_house')->on('houses');

            Schema::enableForeignKeyConstraints();
            //Schema::disableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('house_images');
    }
}
