<?php

use App\Post;
use App\User;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class PostTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('posts')->delete();
        $faker = Faker::create();

        User::all()->each(function ($user) use ($faker) {
            Post::create([
                'title' =>  $faker->word,
                'body' => $faker->paragraph(),
                'user_id' => $user->id
            ]);
        });
    }


}
