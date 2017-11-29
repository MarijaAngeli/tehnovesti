<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
        	'name' => 'Marija A',
        	'email' => 'marija@example.com',
        	'password' => bcrypt('password'),
            'admin' => 1
        ]);
        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/dancer-1904467_640.png',
            'about' => 'Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string delimiter.',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
