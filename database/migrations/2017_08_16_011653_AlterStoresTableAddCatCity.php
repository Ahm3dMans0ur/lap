<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterStoresTableAddCatCity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->integer('category_id')->after('user_id')->unsigned()->nullable();
            $table->integer('city_id')->after('status')->nullable();
            $table->integer('state_id')->after('status')->nullable();
            $table->integer('country_id')->after('status')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->dropForeign('stores_category_id_foreign');
            $table->dropColumn('category_id');
            $table->dropColumn('city_id');
            $table->dropColumn('country_id');
        });
    }
}
