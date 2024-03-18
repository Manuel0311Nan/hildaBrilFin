<?php namespace App\Controllers;

use App\Models\GaleriaModel;
use CodeIgniter\Controller;

class Galeria extends Controller
{
    public function obtenerDetallesImagen($idImagenPrincipal)
    {
        $model = new GaleriaModel(); 
        $detalles = $model->obtenerDetallesPorIdImagenPrincipal($idImagenPrincipal);

        $data = [];
        foreach ($detalles as $detalle) {
            $data[] = [
                'imagen' => base_url('public/images/' . $detalle['imagen_detalle']),
                'texto' => $detalle['texto_detalle']
            ];
        }

        return $this->response->setJSON($data);
    }
}
