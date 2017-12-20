<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStoresTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->string('description');
            $table->integer('logo_file_id')->unsigned();
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('logo_file_id')->references('id')->on('files');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (!Schema::hasTable('stores'))
        {
            Schema::table('stores', function (Blueprint $table) {
                $table->dropForeign('stores_user_id_foreign');
                $table->dropForeign('stores_logo_file_id_foreign');
            });
        }

        Schema::dropIfExists('stores');
    }
}
