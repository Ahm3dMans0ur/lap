<?php

use Illuminate\Database\Seeder;
class SpecsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('specs')->delete();

        \DB::table('specs')->insert(array (
            // array (
            //     'name' => 'Is auction',
            //     'key' => 'auction',
            //     'type' => 'truefalse',
            //     'default' => 0,
            // ),
            array (
                'name' => 'عرض خاص',
                // 'category_id' => 1,
                'key' => 'offer',
                'type' => 'truefalse',
                'default' => 0,
            ),
            array (
                'name' => 'اللون',
                // 'category_id' => 1,
                'key' => 'color',
                'type' => 'string',
                'default' => 'blue',
            )
        ));
    }
}