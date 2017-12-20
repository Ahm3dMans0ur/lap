<?php

use Illuminate\Database\Seeder;

class LikesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 50; $i++) {
            DB::table('likes')->insert(
                [
                    'product_id' => DB::table('products')->inRandomOrder()->first()->id,
                    'user_id' => DB::table('users')->inRandomOrder()->first()->id,
                    'is_liked' => 1,
                    'created_at' => \Carbon\Carbon::now()
                ]
            );
        }
    }
}
