<?php

use Illuminate\Database\Seeder;

class twitterSetting extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Setting::Lang('ar')->set('twitter','shari__sa');
    }
}
