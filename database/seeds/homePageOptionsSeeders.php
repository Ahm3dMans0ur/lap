<?php

use Illuminate\Database\Seeder;

class homePageOptionsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Setting::lang('ar')->set('title', 'Shari');

      DB::table('settings')->insert(
        [
            'key' => 'lighted_stores',
            'value' => '',
            'description' => 'Home page lighted | featured stores',
            'locale' => 'ar'
        ]
      );
    }
}
