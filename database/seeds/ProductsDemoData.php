<?php

use Illuminate\Database\Seeder;
use Faker\Factory AS Faker;

class ProductsDemoData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // 	[
        //     'category_id' => 'integer',
        //     'user_id' => 'integer',
        //     'code' => 'string',
        //     'title' => 'string',
        //     'description' => 'string',
        //     'delivery_options' => 'string',
        //     'price' => 'integer',
        //     'status' => 'string',
        //     'views_cache' => 'integer'
        // ]

        $dummyData = Faker::create("App\Models\Products");


        // 'name' => $faker->name,
        // 'email' => $faker->unique()->email,
        // 'contact_number' => $faker->phoneNumber,

        for ($i = 0; $i < 100; $i++) {
            $store = DB::table('stores')->inRandomOrder()->first();
            DB::table('products')->insert(
                [
                    'category_id' => DB::table('categories')->inRandomOrder()->first()->id,
                    'user_id' => $store->user_id,
                    'store_id' => $store->user_id,
                    'quantity' => 10,
                    'code' => $dummyData->ean13(),
                    'title' => $dummyData->sentence(4),
                    'description' => $dummyData->sentence(20),
                    'delivery_options' => $dummyData->Address(),
                    'price' => $dummyData->randomNumber(2),
                    'status' => 'active',
                    'views_cache' => $dummyData->randomNumber(3),
                    'created_at' => \Carbon\Carbon::now()
                ]
            );
        }
    }
}
