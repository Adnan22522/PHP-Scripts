<?php

use Illuminate\Database\Seeder;
use \App\User;
use App\Profile;
class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= User::create([
            'email'=>'adnan@gmail.com',
            'password'=>bcrypt('adnan'),
            'role'=>'admin',
        ]);

        Profile::create([
            'user_id'=> $user->id
        ]);
    }
}
