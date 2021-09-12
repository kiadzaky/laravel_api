<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i=0; $i < 50; $i++) { 
            DB::table('articles')->insert([
                'title'=>$faker->title,
                'body' => $faker->paragraph,
            ]);
        }
    }
}
