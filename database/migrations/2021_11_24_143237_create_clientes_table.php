<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_documento')->constrained('tipodocumentos');
            $table->string('documento_cliente', 50);
            $table->string('nombre_cliente');
            $table->foreignId('municipio_cliente')->constrained('municipios');
            $table->string('telefono_cliente', 30);
            $table->string('direccion_cliente', 100);
            $table->string('correo_cliente', 100);
            $table->string('logo_cliente', 50)->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
