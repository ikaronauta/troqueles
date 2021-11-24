<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tipodocumento;

class TipodocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Cedula
        $tipoDocumento = new Tipodocumento();
        $tipoDocumento->tipo_documento ='Cedula';
        $tipoDocumento->save();

        //NIT
        $tipoDocumento = new Tipodocumento();
        $tipoDocumento->tipo_documento ='NIT';
        $tipoDocumento->save();

        //TI
        $tipoDocumento = new Tipodocumento();
        $tipoDocumento->tipo_documento ='T.I';
        $tipoDocumento->save();
    }
}
