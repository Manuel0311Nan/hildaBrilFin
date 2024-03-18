<?php

namespace App\Controllers;

use Config\Database;

class Home extends BaseController
{
    public function __construct()
    {
        helper('url');
    }
    public function index()
    {

        echo view('header');
        $db = Database::connect();
        $query = $db->query("SELECT * FROM opinions");
        $resultado = $query->getResult();

        $data = ['titulo' => 'HildaBril Alta Costura', 'opiniones' => $resultado];
        $data['archivo_js'] = 'carousel.js';
        echo view('inicio', $data);
        echo view('footer');


    }
    public function square()
    {
        $db = Database::connect();
        $query = $db->query("SELECT * FROM imagenes_principales WHERE categoria=2");
        $resultado = $query->getResult();

        $data = ['titulo' => 'Vestidos de noche exclusivos', 'vestidosNoche' => $resultado];
        $data['archivo_js'] = 'square.js';
        echo view('header');
        echo view('square', $data);
        echo view('footer', $data);
    }

    public function reciclaje()
    {
        echo view('header');
        echo view('reciclaje');
        echo view('footer');
    }

    public function novia()
    {
        $db = Database::connect();
        $query = $db->query("SELECT * FROM imagenes_principales WHERE categoria=1");
        $resultado = $query->getResult();

        $data = ['titulo' => 'Vestidos de noche exclusivos', 'vestidosNovia' => $resultado];
        $data['archivo_js'] = 'novia.js';
        echo view('header');
        echo view('novia', $data);
        echo view('footer', $data);
    }
    
    public function contacto()
    {
        echo view('header');
        echo view('contacto');
        echo view('footer');
    }
}
