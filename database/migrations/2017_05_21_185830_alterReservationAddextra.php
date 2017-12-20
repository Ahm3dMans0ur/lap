<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterReservationAddextra extends Migration
{
    public function up()
    {
        Schema::table('reservations', function (Blueprint $table)
        {
            $table->string('email')->nullable();
            $table->string('extra_phone')->nullable();
            $table->string('personal_id')->nullable();
        });
    }

    public function down()
    {
        Schema::table('reservations', function (Blueprint $table)
        {
            $table->dropColumn('email');
            $table->dropColumn('extra_phone');
            $table->dropColumn('personal_id');
        });
    }
}