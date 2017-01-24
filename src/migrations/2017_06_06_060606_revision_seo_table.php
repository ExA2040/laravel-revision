<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevisionTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('revisions', function($table)
    {
      $table->increments('id');
      $table->string('class_name');

      $table->integer('object_id');

      $table->longText('attr')->nullable();
      
      $table->index('class_name')->nullable();
      $table->index('object_id')->nullable();

      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('seos');
  }

}
