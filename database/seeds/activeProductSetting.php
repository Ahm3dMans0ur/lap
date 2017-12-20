<?php

use Illuminate\Database\Seeder;

class activeProductSetting extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('settings')->insert([
            'key'=>'activeProducts',
            'value'=>'true',
            'locale'=>'ar',
        ]);
    }
}
