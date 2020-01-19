<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' =>'Shweta Lohar',
            'password' =>bcrypt('password'),
            'remember_token' =>Str::random(10),

         ]);
    }
}
