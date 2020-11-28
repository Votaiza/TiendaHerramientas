<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaCarritosDetalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CarritosDetalle', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_Carritos')->constrained('Carritos');
            $table->foreignId('id_Productos')->constrained('Productos');
            $table->integer('cantidad');
            $table->double('importe_Neto', 13, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CarritosDetalle');
    }
}
