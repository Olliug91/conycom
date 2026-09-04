<?php

namespace App\Http\Controllers;

class LegalController extends Controller
{
    public function avisoLegal()
    {
        return view('pages.legal.aviso-legal');
    }

    public function privacidad()
    {
        return view('pages.legal.privacidad');
    }

    public function cookies()
    {
        return view('pages.legal.cookies');
    }
}
