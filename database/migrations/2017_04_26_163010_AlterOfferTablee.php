<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterOfferTablee extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (Schema::hasColumn('offers', 'product_id')) {
            Schema::disableForeignKeyConstraints();
            Schema::table('offers', function (Blueprint $table) {
                $table->dropForeign('offers_product_id_foreign');
                $table->dropColumn('product_id');
            });
            Schema::enableForeignKeyConstraints();
        }

        Schema::table('offers', function (Blueprint $table) {
            $table->decimal('new_price')->change();
            $table->integer('product_id')->unsigned()->unique();

            if (!Schema::hasColumn('offers', 'store_id')) {
                $table->integer('store_id')->unsigned();
            }

            $table->foreign('store_id')->references('id')->on('stores');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->dropForeign('offers_store_id_foreign');
            $table->dropForeign('offers_product_id_foreign');
        });
    }
}
