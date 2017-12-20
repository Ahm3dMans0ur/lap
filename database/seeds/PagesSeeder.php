<?php

use Illuminate\Database\Seeder;
use Faker\Factory AS Faker;
class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  public function run()
    {
		$pages = [
			"return-policy"=> [  "title"=> 'سياسة الاسترجاع',
									'slug'=> "return-policy"],
									
			"payment_and_shipping_mechanism"=> [ "title"=> 'آلية الدفع والشحن',
												 'slug'=> "payment-and-shipping-mechanism"],
									
			"warranty_mechanism"=> [ "title"=> 'آلية الضمان',
									 'slug'=> "warranty-mechanism"]			
		];
		
        $dummyData = Faker::create("App\Models\Pages");
		foreach ($pages as $page) {
			DB::table('pages')->insert(
                [
                    'title' => $page['title'],
                    'user_id' => DB::table('users')->inRandomOrder()->first()->id,                    
                    'slug' =>$page['slug'],                      
                    'description' => $dummyData->sentence(20),
                    'content' => $dummyData->sentence(200),					
                    'is_published' => 1,					                  
                    'created_at' => \Carbon\Carbon::now()
                ]
            );
		}
    }
}
