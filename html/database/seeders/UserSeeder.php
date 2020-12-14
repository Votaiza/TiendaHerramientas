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
            'name' => 'administrador',
            'email' => 'prueba@gmail.com',
            'password' => bcrypt('administrador'),
            'administrador' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'cliente',
            'email' => 'cliente@gmail.com',
            'password' => bcrypt('cliente'),
            'administrador' => 0,
        ]);
    }
}
