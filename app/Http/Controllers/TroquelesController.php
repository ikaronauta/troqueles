<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Troquel;
use App\Models\Cliente;
use App\Models\Tipotroquel;
use App\Models\Estado;
use Illuminate\Support\Facades\Auth;

class TroquelesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $troqueles = Troquel::all();
        return view('troqueles.index')
                    ->with('troqueles', $troqueles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all();
        $tipoTroqueles = Tipotroquel::all();
        $estados = Estado::all();
        return view('troqueles.create')
                    ->with('clientes', $clientes)
                    ->with('tipoTroqueles', $tipoTroqueles)
                    ->with('estados', $estados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $troquel = new Troquel();
        $troquel->cliente_id = $request->cliente;
        $troquel->tipotroquel_id = $request->tipoTroquel;
        $troquel->estado_id = $request->estado;
        $troquel->save();
        return redirect()->route('troqueles.index')->with('status', 'Troquel creado satisfactoria mente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $troquel = Troquel::find($id);
        return view('troqueles.show')
                    ->with('troquel', $troquel);
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
            return redirect()->route('troqueles.index');
        }

        $troquel = Troquel::find($id);
        $clientes = Cliente::all();
        $tipoTroqueles =Tipotroquel::all();
        $estados = Estado::all();
        return view('troqueles.edit')
                    ->with('troquel', $troquel)
                    ->with('clientes', $clientes)
                    ->with('tipoTroqueles', $tipoTroqueles)
                    ->with('estados', $estados);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Auth::user()->rol == 3) {
            return redirect()->route('troqueles.index');
        }

        $troquel = Troquel::find($id);
        $troquel->cliente_id = $request->cliente;
        $troquel->tipotroquel_id = $request->tipoTroquel;
        $troquel->estado_id = $request->estado;
        $troquel->save();
        return redirect()->route('troqueles.index')->with('status', 'Troquel editado satisfactoria mente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $troquel = Troquel::find($id);
        $troquel->delete();

        return redirect()->route('troqueles.index')->with('status', 'Troquel eliminado con exito');
    }
}
