<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function servicios()
    {
        return view('pages.servicios');
    }

    public function proyectos()
    {
        return view('pages.proyectos');
    }

    public function contacto()
    {
        return view('pages.contacto');
    }

    public function enviarContacto(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mensaje' => 'required|string',
        ]);

        // Lógica de envío de mail (por defecto, solo redirigimos con éxito para esta fase)
        return back()->with('success', '¡Gracias por contactarnos! Nos pondremos en contacto contigo a la brevedad.');
    }
}
