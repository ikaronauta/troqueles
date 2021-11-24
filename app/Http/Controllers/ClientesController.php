<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Models\Cliente;
use App\Models\Tipodocumento;
use App\Models\Municipio;
use App\Models\Troquel;
use Illuminate\Support\Facades\Auth;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::orderBy('id', 'desc')->simplePaginate();
        return view('clientes.index')
                    ->with('clientes', $clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->rol == 3) {
            return redirect()->route('clientes.index');
        }

        $tipoDocumentos = Tipodocumento::all();
        $municipios = Municipio::all();
        return view('clientes.create')
                    ->with('tipoDocumentos', $tipoDocumentos)
                    ->with('municipios', $municipios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        if ($request->hasFile('logo'))
        {
            $file = $request->file('logo');
            $logo = time() . $file->getClientOriginalName();
            $file->move("img/clientes", $logo);
        }else
            {
                $logo = "default-circulo.png";
            }

        $cliente = new Cliente();
        $cliente->tipo_documento = $request->tipoDocumento;
        $cliente->documento_cliente = $request->numeroDocumento;
        $cliente->nombre_cliente = $request->nombre;
        $cliente->municipio_cliente = $request->municipio;
        $cliente->telefono_cliente = $request->telefono;
        $cliente->direccion_cliente = $request->direccion;
        $cliente->correo_cliente = $request->correo;
        $cliente->logo_cliente = $logo;
        $cliente->save();
        
        return redirect()->route('clientes.index')->with('status', 'Cliente creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        $troquelesCliente = Troquel::where('cliente_id', $id)->get();
        return view('clientes.show')
                    ->with('cliente', $cliente)
                    ->with('troquelesCliente', $troquelesCliente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->rol == 3) {
            return redirect()->route('clientes.index');
        }

        $cliente = Cliente::find($id);
        $tipoDocumentos = Tipodocumento::all();
        $municipios = Municipio::all();

        return view('clientes.edit')
                    ->with('cliente', $cliente)
                    ->with('tipoDocumentos', $tipoDocumentos)
                    ->with('municipios', $municipios);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClienteRequest $request, $id)
    {
        if (Auth::user()->rol == 3) {
            return redirect()->route('clientes.index');
        }
        
        $cliente = Cliente::find($id);

        $cliente->tipo_documento = $request->tipoDocumento;
        $cliente->documento_cliente = $request->numeroDocumento;
        $cliente->nombre_cliente = $request->nombre;
        $cliente->municipio_cliente = $request->municipio;
        $cliente->telefono_cliente = $request->telefono;
        $cliente->direccion_cliente = $request->direccion;
        $cliente->correo_cliente = $request->correo;
        
        if ($request->hasFile('logo'))
        {
            $file = $request->file('logo');
            $logo = $cliente->logo_cliente;
            $file->move("img/clientes", $logo);
        }        
        $cliente->save();
        
        return redirect()->route('clientes.index')->with('status', 'Cliente actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
    
        return redirect()->route('clientes.index')->with('status', 'Cliente eliminado con exito');
    }
}
