<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sender_id');
            $table->bigInteger('receiver_id');
            $table->string('consignment_no');
            $table->string('package_type');
            $table->double('net_weight');
            $table->double('gross_weight');
            $table->string('package_no');
            $table->string('voyage_no');
            $table->text('package_description');
            $table->time('departure_time');
            $table->string('origin');
            $table->string('destination');
            $table->date('take_off_date');
            $table->date('expected_delivery_date');
            $table->string('status');
            $table->text('comment');
            $table->time('pickup_time');
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
        Schema::dropIfExists('shipments');
    }
}
