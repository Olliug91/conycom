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

    public function quienesSomos()
    {
        return view('pages.quienes-somos');
    }

    public function contacto()
    {
        return view('pages.contacto');
    }

    public function enviarContacto(Request $request)
    {
        // Honeypot: si el campo 'website' tiene valor, es spam
        if ($request->filled('website')) {
            return back()->with('error', 'Spam detectado.');
        }

        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'servicio' => 'nullable|string|max:255',
            'mensaje' => 'required|string',
        ]);

        try {
            \Illuminate\Support\Facades\Mail::to('guille@conycom.com')
                ->send(new \App\Mail\ContactRequest($validated));
            
            return back()->with('success', '¡Gracias por contactarnos! Tu solicitud ha sido recibida.');
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Error enviando mail de contacto: ' . $e->getMessage());
            return back()->with('error', 'Hubo un problema al enviar tu solicitud. Por favor, inténtalo de nuevo más tarde.');
        }
    }
}
