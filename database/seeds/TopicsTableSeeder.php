<?php

use Illuminate\Database\Seeder;
use App\Models\Topic;
use App\Models\User;
use App\Models\Category;



class TopicsTableSeeder extends Seeder
{
    public function run()
    {
    	$faker = app(Faker\Generator::class);

    	$user_id = User::all()->pluck('id')->toArray();
    	$category_id = Category::all()->pluck('id')->toArray();

        $topics = factory(Topic::class)->times(500)->make()->each(function ($topic, $index) use ($faker,$user_id,$category_id) {
            
            $topic->user_id = $faker->randomElement($user_id);
            $topic->category_id = $faker->randomElement($category_id);
        });

        Topic::insert($topics->toArray());
    }

}

