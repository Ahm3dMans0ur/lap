<?php

use Illuminate\Database\Seeder;
use Faker\Factory AS Faker;

class AuctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dummyData = Faker::create("App\Models\Products");

        for ($i = 0; $i < 3; $i++)
        {
            $store = DB::table('stores')->inRandomOrder()->first();
            $product_id = DB::table('products')->insertGetId(
                [
                    'category_id' => DB::table('categories')->inRandomOrder()->first()->id,
                    'user_id' => $store->user_id,
                    'store_id' => $store->id,
                    'code' => $dummyData->ean13(),
                    'title' => $dummyData->sentence(4),
                    'description' => $dummyData->sentence(20),
                    'delivery_options' => $dummyData->Address(),
                    'price' => $dummyData->randomNumber(2),
                    'status' => 'active',
                    'views_cache' => $dummyData->randomNumber(3),
                    'is_auction' => 'yes',
                    'created_at' => \Carbon\Carbon::now()
                ]
            );
            DB::table('auctions')->insert([
                'user_id' => $store->user_id,
                'product_id' => $product_id,
                'description' => 'asdfads',
                'close_price' => 0.0,
                'start_date' => \Carbon\Carbon::now(),
                'end_date' => \Carbon\Carbon::tomorrow(),
                'created_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
