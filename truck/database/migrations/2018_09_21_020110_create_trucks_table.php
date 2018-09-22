<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trucks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('driver_name');
            $table->integer('plate_num')->unsigned();
            $table->text('location');
            $table->integer('capacity')->unsigned();
            $table->string('model');
            $table->integer('driver_phone')->unsigned();
            $table->integer('company_phone')->unsigned();
            $table->integer('status')->unsigned();
            $table->integer('price_km')->unsigned();
            $table->integer('price_h')->unsigned();
            $table->integer('supplier_id')->unsigned()->nullable();
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trucks');
    }
}
