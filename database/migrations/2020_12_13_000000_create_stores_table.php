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
            $table->string('address',256);
            $table->string('logo')->nullable();
            $table->boolean('wifi',true);
            $table->boolean('ad',false);
            $table->integer('info_id');
            $table->integer('sec_id');
            $table->integer('img_id');
            $table->integer('plan_id');
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
