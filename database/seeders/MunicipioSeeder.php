<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipio;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipio = new Municipio();
        $municipio->nombre_municipio = 'Manizales';
        $municipio->save();

        $municipio = new Municipio();
        $municipio->nombre_municipio = 'Chinchina';
        $municipio->save();

        $municipio = new Municipio();
        $municipio->nombre_municipio = 'Armenia';
        $municipio->save();

        $municipio = new Municipio();
        $municipio->nombre_municipio = 'Salento';
        $municipio->save();

        $municipio = new Municipio();
        $municipio->nombre_municipio = 'Pereira';
        $municipio->save();

        $municipio = new Municipio();
        $municipio->nombre_municipio = 'Dosquebradas';
        $municipio->save();

        $municipio = new Municipio();
        $municipio->nombre_municipio = 'Medellin';
        $municipio->save();

        $municipio = new Municipio();
        $municipio->nombre_municipio = 'Bello';
        $municipio->save();

        $municipio = new Municipio();
        $municipio->nombre_municipio = 'Bogotá';
        $municipio->save();

        $municipio = new Municipio();
        $municipio->nombre_municipio = 'La Calera';
        $municipio->save();
    }
}
