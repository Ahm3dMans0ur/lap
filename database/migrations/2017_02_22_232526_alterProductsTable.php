<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['status']);
        });

        Schema::table('products', function (Blueprint $table) {
            
            $table->string('code', 25)->change();
            $table->string('delivery_options')->nullable()->change();
            $table->string('description')->nullable()->change();
            $table->integer('price')->unsigned()->default(0)->change();
            $table->enum('status', ['active','review','rejected','suspended'])->default('review');
            $table->integer('views_cache')->unsigned()->default(0)->change();

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
