<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPhotoAndDescriptionToArtists extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('artists', function ($table) {
      $table->string('photo')->after('name')->default('user_blank.png');
      $table->string('bio')->after('photo')->nullable();
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::table('artists', function (Blueprint $table) {
      $table->dropColumn('photo');
      $table->dropColumn('bio');
    });
  }

}
