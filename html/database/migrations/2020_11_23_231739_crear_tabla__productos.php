<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Productos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_Rubro')->constrained('Rubros');
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('sku', 250 )->unique();
            $table->text('imagen');
            $table->decimal('precio', 8, 2);
            $table->integer('disponibilidad')->default(0);;
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
        Schema::dropIfExists('Productos');
    }
}
