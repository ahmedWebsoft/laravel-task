<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('um_menus', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id')->index()->default(0);
            $table->string('icon')->nullable();
            $table->string('name');
            $table->integer('sort')->default(0)->index();
            $table->string('route')->nullable()->comment('menus that will host children will have a route of null');
            $table->boolean('status')->default(true)->index();
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
        Schema::dropIfExists('um_menus');
    }
}
