<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tipotroquel;

class TipotroquelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Grande
        $tipoTroquel = new Tipotroquel();
        $tipoTroquel->tipo_troquel = 'Grande';
        $tipoTroquel->valor_troquel = 250000;
        $tipoTroquel->save();

        //Mediano
        $tipoTroquel = new Tipotroquel();
        $tipoTroquel->tipo_troquel = 'Mediano';
        $tipoTroquel->valor_troquel = 200000;
        $tipoTroquel->save();

        //Pequeño
        $tipoTroquel = new Tipotroquel();
        $tipoTroquel->tipo_troquel = 'Pequeño';
        $tipoTroquel->valor_troquel = 150000;
        $tipoTroquel->save();
    }
}
