<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(
           array (

               array (
                   'group_id' => 1,
                   'name' => 'Mohamed Bdwey',
                   'username' => 'm.bdwey',
                   'email' => 'm.bdwey@gmail.com',
                   'password' => bcrypt('123456'),
                   'phone' => '012222222',
                   'account_type' => 'manager',
                   'admin_notes' => 'Hello am main Admin acc',
                   'is_active' => 1,
                   'created_at' => \Carbon\Carbon::now()
               ),
           )
       );
        $facker = Faker\Factory::create();
        for ($i = 0 ; $i < 7 ; $i++){
            if ($i <= 2){
                $group = 1;
            }elseif($i <= 4 && $i >= 3){
                $group = 2;
            }else{
                $group = 3;
            }
            \DB::table('users')->insert(array (
                'group_id' => $group,
                'name' => $facker->name,
                'username' => $facker->userName,
                'email' => $facker->userName.'@gmail.com',
                'password' => bcrypt('123456'),
                'phone' => $facker->phoneNumber,
                'account_type' => 'manager',
                'admin_notes' => 'Hello',
                'is_active' => 1,
                'created_at' => \Carbon\Carbon::now()
            ));
        }
        // \DB::table('users')->delete();
//        \DB::table('users')->insert(
//            array (
//
//                array (
//                    'group_id' => 1,
//                    'name' => 'John Carter',
//                    'username' => 'john',
//                    'email' => 'root.php@hotmail.com',
//                    'password' => bcrypt('123456'),
//                    'phone' => '012222222',
//                    'account_type' => 'corprate',
//                    'admin_notes' => 'Hello am J',
//                    'is_active' => 1,
//                ),
//            )
//        );
        
    }
}