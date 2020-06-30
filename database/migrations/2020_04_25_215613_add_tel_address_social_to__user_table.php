<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTelAddressSocialToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Users', function (Blueprint $table) {
            $table->string('tel');
            $table->string('address');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkid');
            $table->string('youtube');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Users', function (Blueprint $table) {
            $table->dropColumn('tel');
            $table->dropColumn('address');
            $table->dropColumn('facebook');
            $table->dropColumn('twitter');
            $table->dropColumn('linkid');
            $table->dropColumn('youtube');
        });
    }
}
