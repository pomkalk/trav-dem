<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadedFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploaded_files', function (Blueprint $table) {
            $table->string('id', 60);
            $table->string('type', 10);
            $table->string('mime', 50);
            $table->string('original_name');
            $table->integer('user_id')->unsigned();
            $table->float('size');
            $table->integer('width')->unsigned();
            $table->integer('height')->unsigned();
            $table->softDeletes();
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
        Schema::drop('uploaded_files');
    }
}
