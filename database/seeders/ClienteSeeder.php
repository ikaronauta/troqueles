<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Bellota
        $cliente = new Cliente();
        $cliente->tipo_documento = 2;
        $cliente->documento_cliente = 234233182;
        $cliente->nombre_cliente = 'Bellota';
        $cliente->municipio_cliente = 1;
        $cliente->telefono_cliente = '8905432';
        $cliente->direccion_cliente = 'Parque Industrial Juanchito Terraza N°8';
        $cliente->correo_cliente = 'contacto@bellota.com';
        $cliente->logo_cliente = 'default-circulo.png';
        $cliente->save();

        //Casa Luker
        $cliente = new Cliente();
        $cliente->tipo_documento = 2;
        $cliente->documento_cliente = 43552637;
        $cliente->nombre_cliente = 'Casa Luker';
        $cliente->municipio_cliente = 1;
        $cliente->telefono_cliente = '8785342';
        $cliente->direccion_cliente = 'CasaLuker, Carrera 23 N° 64B - 33 Edificio Centro de Negocios Siglo XXI';
        $cliente->correo_cliente = 'contacto@casaluker.com';
        $cliente->logo_cliente = 'default-circulo.png';
        $cliente->save();

        //Saferbo
        $cliente = new Cliente();
        $cliente->tipo_documento = 2;
        $cliente->documento_cliente = 32272993;
        $cliente->nombre_cliente = 'Saferbo';
        $cliente->municipio_cliente = 6;
        $cliente->telefono_cliente = '8653425';
        $cliente->direccion_cliente = 'Calle 9 #1W-12, La Badea';
        $cliente->correo_cliente = 'contacto@saferbo.com';
        $cliente->logo_cliente = 'default-circulo.png';
        $cliente->save();
    }
}
