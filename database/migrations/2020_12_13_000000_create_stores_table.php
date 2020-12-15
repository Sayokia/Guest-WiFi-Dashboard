<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id('sid');
            $table->string('name',256);
            $table->string('address',1024);
            $table->string('logo')->nullable();
            $table->boolean('wifi')->default(true);
            $table->boolean('ad')->default(false);
            $table->integer('info_id')->nullable();
            $table->integer('sec_id')->nullable();
            $table->integer('img_id')->nullable();
            $table->integer('plan_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
