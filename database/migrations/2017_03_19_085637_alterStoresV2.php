<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterStoresV2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('stores', function (Blueprint $table) {
            $table->dropColumn(['status']);
        });
        Schema::table('stores', function (Blueprint $table) {
            $table->string('name',100)->change();
            $table->enum('status', ['active','review','rejected','suspended'])->default('review')->after('description');
            $table->enum('user_status', ['active','suspended','view_only'])->default('view_only')->after('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
