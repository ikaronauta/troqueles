<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cliente;
use App\Models\Troquel;

class HomeController extends Controller
{
    public function index()
    {
        $usuarios = User::count();
        $clientes = Cliente::count();
        $troqueles = Troquel::count();
        return view('home')
                    ->with('usuarios', $usuarios)
                    ->with('clientes', $clientes)
                    ->with('troqueles', $troqueles);
    }
}
