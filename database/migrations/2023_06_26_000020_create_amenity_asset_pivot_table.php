<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmenityAssetPivotTable extends Migration
{
    public function up()
    {
        Schema::create('amenity_asset', function (Blueprint $table) {
            $table->unsignedBigInteger('asset_id');
            $table->foreign('asset_id', 'asset_id_fk_8604218')->references('id')->on('assets')->onDelete('cascade');
            $table->unsignedBigInteger('amenity_id');
            $table->foreign('amenity_id', 'amenity_id_fk_8604218')->references('id')->on('amenities')->onDelete('cascade');
        });
    }
}
