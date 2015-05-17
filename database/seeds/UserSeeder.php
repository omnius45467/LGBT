<?php

use App\User;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('users')->delete();
        $faker = Faker::create();

        User::create([
            'username' => 'sam',
            'email' => 'email@email.com',
            'password' => Hash::make('secret'),
        ]);

        for ($i = 0; $i < 100; $i++) {
            User::create([
                'username' => $faker->userName,
                'email' =>$faker->email,
                'password' => Hash::make('secret'),
            ]);
        }
    }


}
