<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advert', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('is_active');
            $table->integer('balance')->unsigned()->defaulf(100);
            $table->integer('views')->unsigned()->defaulf(0);
            $table->integer('clicks')->unsigned()->defaulf(0);
            $table->integer('click_cost')->unsigned()->defaulf(5);
            $table->string('file_path')->nullable();
            $table->string('adv_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advert');
    }
}
