<?php

use Illuminate\Database\Seeder;
use Faker\Factory AS Faker;
use App\Models\Products;


class tagsBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('tags')->insert([
            'name' => 'cars',
            'slug' => 'cars',
            'is_active' => 1
        ]);
        for ($i = 0; $i < 20; $i++)
        {
            $tagID = DB::table('tags')->insertGetId(
                [
                'name' => $faker->sentence(4),
                'slug' => $faker->slug(2),
                'is_active' => 1,
                ]
            );

            for ($i = 0; $i < rand(1,50); $i++)
        	{
        		$productObject = Products::inRandomOrder()->first();
				if (!$productObject->tags->contains($tagID)) {
					$productObject->tags()->attach($tagID);
				}
        	}
        }
    }
}
