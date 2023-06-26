<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->string('year')->nullable();
            $table->string('color')->nullable();
            $table->string('name')->nullable();
            $table->longText('notes')->nullable();
            $table->longText('short_description')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
