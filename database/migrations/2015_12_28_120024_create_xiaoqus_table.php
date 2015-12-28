<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXiaoqusTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('xiaoqus', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title');
      $table->string('province');
      $table->string('city');
      $table->string('address')->unique();
      $table->decimal('lat', 11, 8);
      $table->decimal('lng', 11, 8);
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
    Schema::drop('xiaoqus');
  }
}
