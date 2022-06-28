<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=> 'June Philip Astillo',
                'email'=> 'june@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('test123456')
            ],
            [
                'name'=> 'Will Smith',
                'email'=> 'smith@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('smith123456')
            ],

            [
                'name'=> 'dog lover',
                'email'=> 'doglover@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('dog123456')
            ],
            [
                'name'=> 'Cute Dog',
                'email'=> 'dog@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('dog123456')
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
