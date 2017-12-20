<?php

use Illuminate\Database\Seeder;
use Faker\Factory AS Faker;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $default = array(
            array('slug' => 'cars','name' => 'السيارات'),
            array('slug' => 'market','name' => 'التسوق'),
            array('slug' => 'real-states','name' => 'الاعمار'),
            array('slug' => 'antiques','name' => 'التراث'),
        );

        foreach ($default as $category) {
            $category_id = \DB::table('categories')->insertGetId(
                array (
                    'name' => $category['name'],
                    'slug' => $category['slug'],
                    'description' => $faker->sentence(20)
                )
            );
            for ($i = 0; $i < 5; $i++)
            {
                DB::table('categories')->insertGetId(
                    [
                        'name' => $faker->sentence(2),
                        'slug' => $faker->slug(2),
                        'description' => $faker->slug(10),
                        'category_id' => $category_id,
                        'is_active' => 1,
                    ]
                );
            }
        }
    }
}
