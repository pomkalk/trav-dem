<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 10);
            $table->string('uid', 50)->unique();
            $table->string('access_token');
            $table->timestamp('expire');

            $table->text('data')->nullalbe();
            $table->timestamp('last_login');

            $table->string('role', 20);
            $table->string('group', 20);

            $table->rememberToken();
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
        Schema::drop('users');
    }
}
