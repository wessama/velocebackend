<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToBookingsTable extends Migration
{
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_8603417')->references('id')->on('users');
            $table->unsignedBigInteger('asset_id')->nullable();
            $table->foreign('asset_id', 'asset_fk_8603411')->references('id')->on('assets');
        });
    }
}
