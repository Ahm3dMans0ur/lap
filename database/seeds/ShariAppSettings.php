<?php

use Illuminate\Database\Seeder;

class ShariAppSettings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Setting::lang('ar')->set('title', 'Shari');
		Setting::lang('ar')->set('description', 'Shari Classified ads');
		Setting::lang('ar')->set('keywords', 'classified, shari');
    }
}
