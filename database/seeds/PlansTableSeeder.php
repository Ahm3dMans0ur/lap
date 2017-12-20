<?php
use Illuminate\Database\Seeder;
use Marvel\Subscription\Models\Plan;

class PlansTableSeeder extends Seeder{

    public function run()
    {
        /// monthly,quarterly,semi-annually,annually,unlimited
        $plan = Plan::create([
            'key' => 'monthly',
            'type' => 0,
            'day' => 0,
            'month' => 1,
            'year' => 0,
            'price' => 20.00,
            'title' => 'monthly',
            'description' => 'monthly plan'
        ]);
        $plan = $plan->translate('ar');
        $plan->title = 'شهرى';
        $plan->description = 'الخطه الشهريه';
        $plan->save();


        $plan = Plan::create([
            'key' => 'quarterly',
            'type' => 0,
            'day' => 0,
            'month' => 3,
            'year' => 0,
            'price' => 20.00,
            'title' => 'quarterly',
            'description' => 'quarterly plan'
        ]);
        $plan = $plan->translate('ar');
        $plan->title = 'فصلى';
        $plan->description = 'الخطه الفصليه';
        $plan->save();


        $plan = Plan::create([
            'key' => 'semi-annually',
            'type' => 0,
            'day' => 0,
            'month' => 6,
            'year' => 0,
            'price' => 20.00,
            'title' => 'semi-annually',
            'description' => 'semi-annually plan'
        ]);
        $plan = $plan->translate('ar');
        $plan->title = 'نصف سنوى';
        $plan->description = 'الخطه النصف سنويه';
        $plan->save();


        $plan = Plan::create([
            'key' => 'annually',
            'type' => 0,
            'day' => 0,
            'month' => 0,
            'year' => 1,
            'price' => 20.00,
            'title' => 'annually',
            'description' => 'annually plan'
        ]);
        $plan = $plan->translate('ar');
        $plan->title = 'سنوى';
        $plan->description = 'الخطه السنويه';
        $plan->save();


        $plan = Plan::create([
            'key' => 'unlimited',
            'type' => 1,
            'day' => 0,
            'month' => 0,
            'year' => 0,
            'price' => 20.00,
            'title' => 'unlimited',
            'description' => 'unlimited plan'
        ]);
        $plan = $plan->translate('ar');
        $plan->title = 'غير محدوده';
        $plan->description = 'الخطه الدائمه';
        $plan->save();




    }
}