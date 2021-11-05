<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCamps extends Migration
{
  public function up()
  {
    Schema::create('camps', function (Blueprint $table) {
      $table->id();
      $table->string('title', 100);
      $table->string('slug', 100);
      $table->integer('price')->unsigned();
      $table->timestamps();
      $table->softDeletes();
    });
  }

  public function down()
  {
    Schema::dropIfExists('camps');
  }
}
