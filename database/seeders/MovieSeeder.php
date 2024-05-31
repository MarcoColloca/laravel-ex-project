<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        
        for($i = 0; $i < 50; $i++)
        {

            $new_movie = new Movie();

            $new_movie->title = $faker->sentence(rand(1, 6), false);
            $new_movie->thumb = "https://picsum.photos/200/300?random=".rand(1,100);
            $new_movie->director = $faker->name();
            $new_movie->release_date = $faker->date();
            $new_movie->vote = $faker->randomFloat(1, 0, 5);

            $new_movie->save();
        }
    }
}
