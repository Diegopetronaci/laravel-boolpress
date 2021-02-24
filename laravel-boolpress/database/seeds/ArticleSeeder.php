<?php

use App\Article;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newArticle = new Article();
            $newArticle->titolo = $faker->word();
            $newArticle->body = $faker->text();
            $newArticle->save();
        };
    }
}
