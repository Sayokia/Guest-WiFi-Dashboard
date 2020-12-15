<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores_info', function (Blueprint $table) {
            $table->id('info_id');
            $table->text('name_en',2048)->nullable();
            $table->text('name_zh',2048)->nullable();
            $table->text('name_fr',2048)->nullable();
            $table->text('name_jp',2048)->nullable();
            $table->text('name_kr',2048)->nullable();
            $table->text('ance_en',2048)->nullable();
            $table->text('ance_zh',2048)->nullable();
            $table->text('ance_fr',2048)->nullable();
            $table->text('ance_jp',2048)->nullable();
            $table->text('ance_kr',2048)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores_info');
    }
}
