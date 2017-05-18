<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeign1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data',function (Blueprint $table)
        {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('cabang_id')->references('id')->on('cabang');
        });

        Schema::table('cabang',function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('input',function (Blueprint $table){
            $table->foreign('cabang_id')->references('id')->on('cabang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
