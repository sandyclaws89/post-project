<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $faker ->addProvider(new \Faker\Provider\it_IT\Person($faker));

        for ($i=1; $i <= 70; $i++) {
            $postData = [
                'image'         =>  'https://picsum.photos/id/' . rand(0, 1084) . '/550/400',
                'title'         =>  $faker->words(rand(1, 3), true),
                'content'       =>  $faker->text(),
                'author'        =>  $faker->name(),
                'genre'         =>  $faker->randomElement(['Sport', 'Gossip', 'Essay', 'Politic']),
                'slug'          =>  $faker->words(rand(1, 3), true),
                ];
                Post::create($postData);
        }
    }
}

