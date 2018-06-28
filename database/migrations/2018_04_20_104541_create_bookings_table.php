<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookingsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('user_id')->nullable();
            $table->string('booking_code');
            $table->tinyInteger('form_no');
            $table->string('type')->nullable();
            $table->string('block')->nullable();
            $table->bigInteger('total_price')->nullable();
            $table->string('size')->nullable();
            $table->date('booking_date')->nullable();
            $table->tinyInteger('total_installments')->nullable();
            $table->mediumInteger('installment_amount')->nullable();
            $table->string('society')->nullable();
            $table->tinyInteger('confirmation_after')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bookings');
    }
}
