<?php

use App\Announcement;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class AnnouncementTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     * 
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 4; $i++) {
            Announcement::create([
                'title' => $faker->word,
                'body' =>$faker->sentences(),
                'path' => $faker->url,
            ]);
        }
    }


}
