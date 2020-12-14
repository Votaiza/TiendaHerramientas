<?php

namespace Database\Seeders;

use \Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('Productos')->insert([

            'id_Rubro'=> '2',
            'nombre'=> 'Combo cuidado de plantas',
            'descripcion'=> 'Las mejores herramientas para el cuidado de tus plantas',
            'sku'=> '1234567890',
            'imagen'=> 'uploads/TLw4MJbwOaeyMpJSuTCplmmkXnjXM9zF8HIKrzUa.jpeg',
            'precio'=> '1250.00',
            'disponibilidad'=> '20'
        ]);

        DB::table('Productos')->insert([

            'id_Rubro'=> '2',
            'nombre'=> 'Desmalezadora',
            'descripcion'=> 'Desmalezadora Steel',
            'sku'=> '871872312',
            'imagen'=> 'uploads/DxCxtkD8IRkCE3euXEojH7AqvdV3j6yLT3t9Uswt.jpeg',
            'precio'=> '15000.00',
            'disponibilidad'=> '20'
        ]);
    }
}
