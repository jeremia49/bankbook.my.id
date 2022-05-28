<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class History extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('did'); //document id
            $table->unsignedBigInteger('uid'); //user id
            $table->timestamps();

            $table->foreign('uid')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('did')->references('id')->on('documents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history', function(Blueprint $table){
            $table->dropForeign('uid'); 
            $table->dropForeign('did');
            $table->dropColumn('history'); 
        });
    }
}
