<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repayments', function (Blueprint $table) {
            $table->id();            
            $table->string('loans_id');
            $table->string('repaymentNumber');
            $table->string('start_date');
            $table->string('beginningBalance');
            $table->double('interest');
            $table->double('principal');
            $table->string('scheduledPayment');
            $table->string('endingBalance');
            $table->string('status')->default('Not Paid');
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
        Schema::dropIfExists('repayments');
    }
}
