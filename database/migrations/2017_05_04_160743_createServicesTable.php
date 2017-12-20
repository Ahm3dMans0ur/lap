<?php

use Illuminate\Support\Fluent;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Grammars\MySqlGrammar;

/**
 * Extended version of MySqlGrammar with
 * support of 'set' data type
 */
class ExtendedMySqlGrammar extends MySqlGrammar {

    /**
     * Create the column definition for an 'set' type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeSet(Fluent $column)
    {
        return "set('".implode("', '", $column->allowed)."')";
    }

}

/**
 * Extended version of Blueprint with
 * support of 'set' data type
 */
class ExtendedBlueprint extends Blueprint {

    /**
     * Create a new 'set' column on the table.
     *
     * @param  string  $column
     * @param  array   $allowed
     * @return \Illuminate\Support\Fluent
     */
    public function set($column, array $allowed)
    {
        return $this->addColumn('set', $column, compact('allowed'));
    }
}


class CreateServicesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // register new grammar class
        DB::connection()->setSchemaGrammar(new ExtendedMySqlGrammar());
        $schema = DB::connection()->getSchemaBuilder();

        // replace blueprint
        $schema->blueprintResolver(function($table, $callback) {
            return new ExtendedBlueprint($table, $callback);
        });

        $schema->create('services', function(ExtendedBlueprint $table)
        {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('store_id')->nullable()->unsigned();
            $table->string('title')->nullable();
            $table->mediumText('description')->nullable();
            $table->set('working_days',['Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday'])->default('Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday');
            $table->set('working_hours',['01 AM','02 AM','03 AM','04 AM','05 AM','06 AM','07 AM','08 AM','09 AM','10 AM','11 AM','12 AM','01 PM','02 PM','03 PM','04 PM','05 PM','06 PM','07 PM','08 PM','09 PM','10 PM','11 PM','12 PM','24 H'])->default('24 H');
            $table->enum('reserving_type',['day','hour'])->default('day');
            $table->enum('status',['active','suspended'])->default('active');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('store_id')->references('id')->on('stores');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}