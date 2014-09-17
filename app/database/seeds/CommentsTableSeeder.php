<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CommentsTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 40) as $index) {
            Comment::create([
                'body' => implode($faker->paragraphs(10)),
                'post_id' => $faker->numberBetween(1,44),
                'user_id' => $faker->numberBetween(1,100)
			]);
        }
    }

}