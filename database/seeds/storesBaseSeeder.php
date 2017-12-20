<?php

use Illuminate\Database\Seeder;
use Faker\Factory AS Faker;

class storesBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        // http://lorempixel.com/output/technics-q-c-640-480-6.jpg
        for ($i = 0; $i < 7; $i++)
        {
            $userObject = DB::table('users')->where('id','=',$i + 1)->first();
            $fileID = DB::table('files')->insertGetId(
                [
                    'user_id' => $userObject->id,
                    'url' => $faker->imageUrl(1200, 400, 'technics'),
                    'local_path' => '/dummy/'.$faker->sentence(4),
                    'name' => $faker->sentence(4),
                    'file_size' => $faker->randomNumber(2),
                    'is_active' => 1,
                ]
            );
            DB::table('stores')->insertGetId(
                [
                    'user_id' => $userObject->id,
                    'name' => $faker->sentence(4),
                    'description' => $faker->sentence(20),
                    'logo_file_id' => $fileID,
                    'slug' => $faker->userName,
                    'status' => 1,
                    'created_at' => \Carbon\Carbon::now()
                ]
            );
        }
    }
}
