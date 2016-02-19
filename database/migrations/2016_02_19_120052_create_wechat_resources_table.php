<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWechatResourcesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('wechat_resources', function (Blueprint $table) {
      $table->increments('id');
      $table->string('wechat_id');
      $table->string('wechat_password');
      $table->string('access_token');
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
    Schema::drop('wechat_resources');
  }
}
