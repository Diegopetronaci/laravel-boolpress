<?php

use App\Admin;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newAdmin = new Admin();
            $newAdmin->titolo = $faker->word();
            $newAdmin->body = $faker->text();
            $newAdmin->save();
        };
    }
}
