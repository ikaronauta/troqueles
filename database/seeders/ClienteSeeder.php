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
        //Cliente 1
        $cliente = new Cliente();
        $cliente->tipo_documento = 2;
        $cliente->documento_cliente = 234233182;
        $cliente->nombre_cliente = 'Fabrica de Cajas 1A';
        $cliente->municipio_cliente = 1;
        $cliente->telefono_cliente = '8905432';
        $cliente->direccion_cliente = 'Cra 45 # 76-22';
        $cliente->correo_cliente = 'contacto@1a.com';
        $cliente->logo_cliente = 'default-circulo.png';
        $cliente->save();

        //Cliente 2
        $cliente = new Cliente();
        $cliente->tipo_documento = 2;
        $cliente->documento_cliente = 43552637;
        $cliente->nombre_cliente = 'Regalos y Más';
        $cliente->municipio_cliente = 1;
        $cliente->telefono_cliente = '8785342';
        $cliente->direccion_cliente = 'Cl 26 # 65-154';
        $cliente->correo_cliente = 'contacto@regalos.com';
        $cliente->logo_cliente = 'default-circulo.png';
        $cliente->save();

        //Cliente 3
        $cliente = new Cliente();
        $cliente->tipo_documento = 2;
        $cliente->documento_cliente = 32272993;
        $cliente->nombre_cliente = 'Transportadora Universal';
        $cliente->municipio_cliente = 6;
        $cliente->telefono_cliente = '8653425';
        $cliente->direccion_cliente = 'Cl 45 # 12-26';
        $cliente->correo_cliente = 'contacto@universal.com';
        $cliente->logo_cliente = 'default-circulo.png';
        $cliente->save();

        //Cliente 4
        $cliente = new Cliente();
        $cliente->tipo_documento = 2;
        $cliente->documento_cliente = 32272993;
        $cliente->nombre_cliente = 'Cargo Plus';
        $cliente->municipio_cliente = 6;
        $cliente->telefono_cliente = '8653425';
        $cliente->direccion_cliente = 'Cl 88 # 126-26';
        $cliente->correo_cliente = 'contacto@plus.com';
        $cliente->logo_cliente = 'default-circulo.png';
        $cliente->save();

        //Cliente 5
        $cliente = new Cliente();
        $cliente->tipo_documento = 2;
        $cliente->documento_cliente = 32272993;
        $cliente->nombre_cliente = 'Multilujos';
        $cliente->municipio_cliente = 3;
        $cliente->telefono_cliente = '342342345';
        $cliente->direccion_cliente = 'Cr 122 # 34-3';
        $cliente->correo_cliente = 'contacto@Multilujos.com';
        $cliente->logo_cliente = 'default-circulo.png';
        $cliente->save();

        //Cliente 6
        $cliente = new Cliente();
        $cliente->tipo_documento = 2;
        $cliente->documento_cliente = 32272993;
        $cliente->nombre_cliente = 'Autopartes La Estrella';
        $cliente->municipio_cliente = 1;
        $cliente->telefono_cliente = '5435344';
        $cliente->direccion_cliente = 'Cr 23 # 64-32';
        $cliente->correo_cliente = 'contacto@estrella.com';
        $cliente->logo_cliente = 'default-circulo.png';
        $cliente->save();

        //Cliente 7
        $cliente = new Cliente();
        $cliente->tipo_documento = 2;
        $cliente->documento_cliente = 32272993;
        $cliente->nombre_cliente = 'Recda';
        $cliente->municipio_cliente = 5;
        $cliente->telefono_cliente = '4353454';
        $cliente->direccion_cliente = 'Cl 12 # 34-100';
        $cliente->correo_cliente = 'contacto@recda.com';
        $cliente->logo_cliente = 'default-circulo.png';
        $cliente->save();

        //Cliente 8
        $cliente = new Cliente();
        $cliente->tipo_documento = 2;
        $cliente->documento_cliente = 32272993;
        $cliente->nombre_cliente = 'Importadora Superior';
        $cliente->municipio_cliente = 6;
        $cliente->telefono_cliente = '3424324';
        $cliente->direccion_cliente = 'Cl 87 # 12-14';
        $cliente->correo_cliente = 'contacto@superior.com';
        $cliente->logo_cliente = 'default-circulo.png';
        $cliente->save();

        //Cliente 9
        $cliente = new Cliente();
        $cliente->tipo_documento = 2;
        $cliente->documento_cliente = 32272993;
        $cliente->nombre_cliente = 'Todo Partes Alex';
        $cliente->municipio_cliente = 6;
        $cliente->telefono_cliente = '654567';
        $cliente->direccion_cliente = 'Cr 6 # 121-23';
        $cliente->correo_cliente = 'contacto@todopartes.com';
        $cliente->logo_cliente = 'default-circulo.png';
        $cliente->save();

        //Cliente 10
        $cliente = new Cliente();
        $cliente->tipo_documento = 2;
        $cliente->documento_cliente = 32272993;
        $cliente->nombre_cliente = 'Autopartes Speed';
        $cliente->municipio_cliente = 4;
        $cliente->telefono_cliente = '54354534';
        $cliente->direccion_cliente = 'Cr 43 # 10-36';
        $cliente->correo_cliente = 'contacto@speed.com';
        $cliente->logo_cliente = 'default-circulo.png';
        $cliente->save();

        //Bellota
        $cliente = new Cliente();
        $cliente->tipo_documento = 2;
        $cliente->documento_cliente = 234233182;
        $cliente->nombre_cliente = 'Bellota';
        $cliente->municipio_cliente = 1;
        $cliente->telefono_cliente = '8905432';
        $cliente->direccion_cliente = 'PQ Industrial Juanchito Terraza N°8';
        $cliente->correo_cliente = 'contacto@bellota.com';
        $cliente->logo_cliente = 'bellota.png';
        $cliente->save();

        //Casa Luker
        $cliente = new Cliente();
        $cliente->tipo_documento = 2;
        $cliente->documento_cliente = 43552637;
        $cliente->nombre_cliente = 'Casa Luker';
        $cliente->municipio_cliente = 1;
        $cliente->telefono_cliente = '8785342';
        $cliente->direccion_cliente = 'Cr 23 N° 64B-33 Edificio Centro de Negocios Siglo XXI';
        $cliente->correo_cliente = 'contacto@casaluker.com';
        $cliente->logo_cliente = 'luker.png';
        $cliente->save();

        //Saferbo
        $cliente = new Cliente();
        $cliente->tipo_documento = 2;
        $cliente->documento_cliente = 32272993;
        $cliente->nombre_cliente = 'Saferbo';
        $cliente->municipio_cliente = 6;
        $cliente->telefono_cliente = '8653425';
        $cliente->direccion_cliente = 'Cl 9 #1W-12, La Badea';
        $cliente->correo_cliente = 'contacto@saferbo.com';
        $cliente->logo_cliente = 'saferbo.jpg';
        $cliente->save();

        //Cafe Quindio
        $cliente = new Cliente();
        $cliente->tipo_documento = 2;
        $cliente->documento_cliente = 654645645;
        $cliente->nombre_cliente = 'Cafe Quindio';
        $cliente->municipio_cliente = 3;
        $cliente->telefono_cliente = '43535435';
        $cliente->direccion_cliente = 'cl 110 # 34-26';
        $cliente->correo_cliente = 'contacto@cafequindio.com';
        $cliente->logo_cliente = 'saferbo.jpg';
        $cliente->save();

        //Club Manizales
        $cliente = new Cliente();
        $cliente->tipo_documento = 2;
        $cliente->documento_cliente = 654645645;
        $cliente->nombre_cliente = 'Club Manizales';
        $cliente->municipio_cliente = 3;
        $cliente->telefono_cliente = '43535435';
        $cliente->direccion_cliente = 'cl 110 # 34-26';
        $cliente->correo_cliente = 'contacto@clubmanizales.com';
        $cliente->logo_cliente = 'clubmanizales.jpg';
        $cliente->save();
    }
}
