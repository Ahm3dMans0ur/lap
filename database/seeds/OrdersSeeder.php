<?php

use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 50; $i++) {
            $order_id = DB::table('orders')->insertGetId(
                [
                    'store_id' => DB::table('stores')->inRandomOrder()->first()->id,
                    'user_id' => DB::table('users')->inRandomOrder()->first()->id,
                    'status' => 1,
                    'created_at' => \Carbon\Carbon::now()
                ],
                'id'
            );
            for ($j = 0 ; $j < 2 ; $j++){
                $product = DB::table('products')->inRandomOrder()->first();
                Db::table('orders_items')->insert([
                    'product_id' => $product->id ,
                    'title' => $product->title,
                    'price' => $product->price,
                    'order_id' => $order_id,
                    'qty' => 1,
                    'created_at' => \Carbon\Carbon::now()
                ]);
            }
        }
    }
}
