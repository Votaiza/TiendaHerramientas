<?php

namespace Database\Seeders;

use \Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RubroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rubros = ['Construccion', 'Jadineria', 'Carpinteria', 'Todos'];

        foreach($rubros as $rubro){
            DB::table('Rubros')->insert([
                'Nombre' => $rubro,
            ]);
        }


    }
}
