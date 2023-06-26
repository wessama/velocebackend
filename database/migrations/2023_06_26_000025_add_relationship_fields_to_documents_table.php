<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToDocumentsTable extends Migration
{
    public function up()
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_8604159')->references('id')->on('users');
            $table->unsignedBigInteger('document_type_id')->nullable();
            $table->foreign('document_type_id', 'document_type_fk_8604171')->references('id')->on('document_types');
        });
    }
}
