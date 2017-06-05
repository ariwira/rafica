<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCabangPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabang_input',function (Blueprint $table){
            $table->integer('cabang_id')->unsigned();
            $table->integer('input_id')->unsigned();

            $table->primary(['cabang_id', 'input_id']);
            $table->foreign('cabang_id')->references('id')->on('cabang');
            $table->foreign('input_id')->references('id')->on('input');
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
