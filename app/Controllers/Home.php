<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function verMensaje():string
    {
        return view('pagina_mensaje')-,
    }
}
