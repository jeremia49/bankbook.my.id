<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UploadedDocuments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');
            $table->string('url');
            $table->timestamps();
            $table->unsignedBigInteger('uid');
            $table->boolean('is_active');
            $table->string('hash_md5');
            


            $table->foreign('uid')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents', function(Blueprint $table){
            $table->dropForeign('uid'); 
            $table->dropColumn('documents'); 
        });
    }
}
