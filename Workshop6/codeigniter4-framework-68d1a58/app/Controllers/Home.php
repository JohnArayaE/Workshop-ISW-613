<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index'); // Carga la vista principal con los botones
    }

}
