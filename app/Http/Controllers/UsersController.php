<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        if (Auth::user()->rol == 3) {
            return redirect()->route('clientes.index');
        }

        $usuarios = User::all();
        return view('users.index')
                    ->with('usuarios', $usuarios);
    }
}
