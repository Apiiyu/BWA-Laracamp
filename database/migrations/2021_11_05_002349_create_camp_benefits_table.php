<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampBenefitsTable extends Migration
{
  public function up()
  {
    Schema::create('camp_benefits', function (Blueprint $table) {
      $table->id();
      /*
        1st Method
        $table->bigInteger('camp_id')->unsigned();
        $table->unsignedBigInteger('camp_id');
      */

      // 2nd Method (Cara paling mudah)
      $table->foreignId('camp_id')->constrained();
      $table->string('name');
      $table->timestamps();

      /*
        1st Method
        $table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade');
      */
    });
  }

  public function down()
  {
    Schema::dropIfExists('camp_benefits');
  }
}
