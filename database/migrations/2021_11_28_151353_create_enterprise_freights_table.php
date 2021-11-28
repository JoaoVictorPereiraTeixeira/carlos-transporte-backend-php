<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnterpriseFreightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterprise_freights', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('requesterName');
            $table->string('requesterMainTelephone');
            $table->string('requesterSecondaryTelephone');
            $table->string('dateSolicitation');
            $table->string('originCep');
            $table->string('originCity');
            $table->string('originAddress');
            $table->string('originDistrict');
            $table->string('originNumber');
            $table->string('destinyCep');
            $table->string('destinyAddress');
            $table->string('destinyDistrict');
            $table->string('weight');
            $table->string('cnpjSender');
            $table->string('cnpjRecipient');
            $table->string('quantityItems');
            $table->string('collectObservations');
            $table->text('merchandiseObservations');
            $table->string('paidAtOrigin');
            $table->string('dateToCollect');
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
        Schema::dropIfExists('enterprise_freights');
    }
}
