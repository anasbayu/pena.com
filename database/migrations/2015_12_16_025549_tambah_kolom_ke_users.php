<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TambahKolomKeUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function(Blueprint $table)
      {
          $table->string('email');
          $table->string('deskripsi');
          $table->string('linkfb');
          $table->string('linktwitter');
          $table->string('linkinstagram');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('club', function(Blueprint $table){
           $table->dropColumn('email');
           $table->dropColumn('deskripsi');
           $table->dropColumn('linkfb');
           $table->dropColumn('linktwitter');
           $table->dropColumn('linkinstagram');
       });
    }
}
