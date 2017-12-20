<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterProductsFixTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->dropColumn('delivery_options');
            $table->dropColumn('price');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->mediumText('delivery_options')->after('title');
            $table->mediumText('description')->after('title');
            $table->float('price',8,2)->default(0)->unsigned()->after('title');
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
