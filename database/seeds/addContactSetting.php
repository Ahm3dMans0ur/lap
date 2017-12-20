<?php

use Illuminate\Database\Seeder;

class addContactSetting extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('settings')->insert([
            'key'=>'address',
            'value'=>'One Gateway Center, Suite 25500+',
            'locale'=>'ar',
        ]);

        \DB::table('settings')->insert([
            'key'=>'phone',
            'value'=>'99999999999',
            'locale'=>'ar',
        ]);

        \DB::table('settings')->insert([
            'key'=>'email',
            'value'=>'shari@sh.com',
            'locale'=>'ar',
        ]);

        \DB::table('settings')->insert([
            'key'=>'longitude',
            'value'=>'28.639225',
            'locale'=>'ar',
        ]);

        \DB::table('settings')->insert([
            'key'=>'latitude',
            'value'=>'77.390442',
            'locale'=>'ar',
        ]);
    }
}
