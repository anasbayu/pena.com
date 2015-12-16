<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTabelUsersLagi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email', 50)->change();
            $table->string('deskripsi', 150)->nullable()->change();
            $table->string('linkfb', 100)->nullable()->change();
            $table->string('linktwitter', 100)->nullable()->change();
            $table->string('linkinstagram', 100)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
   
    }
}
