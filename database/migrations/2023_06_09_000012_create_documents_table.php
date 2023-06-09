<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('comments')->nullable();
            $table->boolean('verified')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
