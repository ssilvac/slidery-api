<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prizes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->string('name');
            $table->integer('quantity');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
        });

        Schema::table('coupons', function (Blueprint $table) {
            $table->foreign('prize_id')->references('id')->on('prizes');
        });

        Schema::table('raffles', function (Blueprint $table) {
            $table->foreign('prize_id')->references('id')->on('prizes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prizes', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
        });

        Schema::table('coupons', function (Blueprint $table) {
            $table->dropForeign(['prize_id']);
        });

        Schema::table('raffles', function (Blueprint $table) {
            $table->dropForeign(['prize_id']);
        });

        Schema::dropIfExists('prizes');
    }
}
