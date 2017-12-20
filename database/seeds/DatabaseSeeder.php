<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GroupsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(storesBaseSeeder::class);
        $this->call(ProductsDemoData::class);
        $this->call(SpecsTableSeeder::class);
        $this->call(tagsBaseSeeder::class);
        $this->call(LikesSeeder::class);
        $this->call(OrdersSeeder::class);
        $this->call(AuctionSeeder::class);
        $this->call(ShariAppSettings::class);
        $this->call(addContactSetting::class);
        $this->call(twitterSetting::class);
        $this->call(activeProductSetting::class);
		$this->call(PagesSeeder::class);

    }
}
