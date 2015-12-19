<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTabelFeedsUserid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('feeds', function (Blueprint $table)
        {
           $table->renameColumn('idPenulis', 'user_id');
           $table->integer('views')->nullable();
           $table->integer('likes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('feeds', function (Blueprint $table)
        {
           $table->renameColumn('user_id', 'idPenulis');
           $table->dropColumn('views');
           $table->dropColumn('likes');
        });
    }
}
