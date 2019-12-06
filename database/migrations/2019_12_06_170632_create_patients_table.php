<?php
# @Author: izzy
# @Date:   2019-12-06T17:06:32+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T19:14:17+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('address', 100);
          $table->string('phone', 20);
          $table->boolean('insurance');
          $table->string('company', 20);
          $table->string('policy', 12);
          $table->bigInteger('user_id')->unsigned();
          $table->timestamps();

          $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
