<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadedImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploaded_images', function (Blueprint $table) {
            $table->string('id', 60);
            $table->string('name');
            $table->string('extension',10);
            $table->string('mime', 50);
            $table->integer('size')->unsigned();
            $table->integer('width')->unsigned();
            $table->integer('height')->unsigned();
            $table->softDeletes();
            $table->timestamps();

            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('uploaded_images');
    }
}
