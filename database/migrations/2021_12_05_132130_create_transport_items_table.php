<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transport_items', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('item');
            $table->integer('quantity');
            $table->uuid('moving_house_id');
            $table->foreign('moving_house_id')
                ->references('id')
                ->on('moving_houses')
                ->onDelete('cascade');
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
        Schema::dropIfExists('transport_items');
    }
}
