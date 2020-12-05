<?php

namespace Database\Seeders;

use Dotenv\Util\Str;
use \Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'root',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'administrador' => 1,
        ])
    }
}
