<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAdvertsAddviewedAt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('advert', function (Blueprint $table) {
            $table->dateTime('viewed_at')->nullable();
            $table->string('type')->default('banner');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('advert', function (Blueprint $table) {
            $table->dropColumn('viewed_at');
            $table->dropColumn('type');
        });
    }
}
