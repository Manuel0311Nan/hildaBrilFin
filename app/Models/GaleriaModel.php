<?php namespace App\Models;

use CodeIgniter\Model;

class GaleriaModel extends Model
{
    protected $table = 'imagenes_square_detalle'; 
    protected $allowedFields = ['id_imagen_principal', 'imagen_detalle', 'texto_detalle'];

    public function obtenerDetallesPorIdImagenPrincipal($idImagenPrincipal)
    {
        return $this->where('id_imagen_principal', $idImagenPrincipal)
                    ->findAll();
    }
}
