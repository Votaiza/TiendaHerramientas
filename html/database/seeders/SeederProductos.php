<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Producto;
class SeederProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::factory(10)->create();
    }
}
