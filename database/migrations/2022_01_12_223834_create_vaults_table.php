<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaults', function (Blueprint $table) {
            $table->id();
            $table->string('skr_no');
            $table->string('security_code');
            $table->string('certificate_deposit_code');
            $table->string('depositor_code');
            $table->string('series');
            $table->string('number');
            $table->string('items');
            $table->string('depositor_name');
            $table->string('depositor_nationality');
            $table->string('particulars');
            $table->string('classification');
            $table->integer('quantity');
            $table->date('date_deposited');
            $table->string('beneficiary_name');
            $table->string('beneficiary_nationality');
            $table->text('comment');
            $table->string('password');
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
        Schema::dropIfExists('vaults');
    }
}
