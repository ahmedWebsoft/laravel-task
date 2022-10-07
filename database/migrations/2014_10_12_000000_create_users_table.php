<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('um_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('user_type')->default(1)->comment("0 is for admin and 1 is for normal");
            $table->integer('role_id')->index();
            $table->string('last_session_id')->nullable()->index();
            $table->text('last_session_data')->nullable();
            $table->string('avatar')->nullable();
            $table->string('email')->unique()->index();
            $table->string('password');
            $table->boolean('status')->default(true)->index();
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
        Schema::dropIfExists('users');
    }
}
