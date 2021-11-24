<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estado;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Solicitado
        $estado = new Estado();
        $estado->nombre_estado = 'Solicitado';
        $estado->save();

        //Alistamiento
        $estado = new Estado();
        $estado->nombre_estado = 'Alistamiento';
        $estado->save();

        //Produccion
        $estado = new Estado();
        $estado->nombre_estado = 'Produccion';
        $estado->save();

        //Terminado
        $estado = new Estado();
        $estado->nombre_estado = 'Terminado';
        $estado->save();

        //Entregado
        $estado = new Estado();
        $estado->nombre_estado = 'Entregado';
        $estado->save();
    }
}
