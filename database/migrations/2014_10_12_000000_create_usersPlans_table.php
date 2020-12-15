<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_plan', function (Blueprint $table) {
            $table->id('plan_id');
            $table->string('name',1024);
            $table->string('desc',2048)->nullable();
            $table->integer('max_device');
            $table->integer('max_ad');
            $table->integer('max_ad_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_plan');
    }
}
