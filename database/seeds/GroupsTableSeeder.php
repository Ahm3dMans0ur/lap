<?php

use Illuminate\Database\Seeder;
// use Carbon/Carbon;
class GroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('groups')->delete();
        
        \DB::table('groups')->insert(array (
            array (
                'id' => 1,
                'name' => 'ذهبي',
                'class' => 'golden',
                'description' => 'الذهبية 500 ريال',
                'is_active' => 1,
                'is_free' => 1,
                'have_store' => 1,
                'deleted_at' => NULL,
            ),
            array (
                'id' => 2,
                'name' => 'فضي',
                'class' => 'silver',
                'description' => 'الفضية 250 ريال',
                'is_active' => 1,
                'is_free' => 1,
                'have_store' => 1,
                'deleted_at' => NULL,
            ),
            array (
                'id' => 3,
                'name' => 'افراد',
                'class' => 'personal',
                'description' => 'الافراد مجانا',
                'is_active' => 1,
                'is_free' => 1,
                'have_store' => 0,
                'deleted_at' => NULL,
            )
        ));
    }
}