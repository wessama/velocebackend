<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->datetime('pickup_date');
            $table->datetime('dropoff_date');
            $table->string('pickup_location')->nullable();
            $table->string('dropoff_location')->nullable();
            $table->boolean('canceled')->default(0)->nullable();
            $table->boolean('refunded')->default(0)->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
