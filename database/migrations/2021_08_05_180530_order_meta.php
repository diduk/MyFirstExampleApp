<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderMeta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_meta', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->string('colname');
            $table->string('data_string');
            $table->integer('data_num');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        SchemaSchema::dropIfExists('order_meta');
    }
}
