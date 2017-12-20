<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->enum('section', ['cars','market','realstate','antiques'])->default('cars');

        });
        Schema::table('categories', function (Blueprint $table) {
            $table->dropForeign('categories_section_id_foreign');
            $table->dropColumn('section_id');
        });
    }

    public function down()
    {
        
    }
}
