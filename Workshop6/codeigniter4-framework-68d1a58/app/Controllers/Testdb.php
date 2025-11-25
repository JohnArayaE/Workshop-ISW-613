<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use Config\Database;

class Testdb extends Controller
{
    public function index()
{
    try {
        $db = \Config\Database::connect();
        echo "Conectado con exito a la base de datos 'workshop6'.";
    } catch (\Exception $e) {
        echo " Error: " . $e->getMessage();
    }
}

}