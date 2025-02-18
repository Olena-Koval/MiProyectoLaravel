<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Protege la ruta para usuarios autenticados
    }

    public function index()
    {
        return view('home');
    }
}
