<?php namespace App\Models;

use CodeIgniter\Model;

class GaleriaModel extends Model
{
    protected $table = 'imagenes_square_detalle'; // Nombre de tu tabla de detalles
    protected $allowedFields = ['id_imagen_principal', 'imagen_detalle', 'texto_detalle']; // Asegúrate de ajustar los campos

    public function obtenerDetallesPorIdImagenPrincipal($idImagenPrincipal)
    {
        // Realiza la consulta para obtener las imágenes y textos relacionados
        // con la imagen principal dada
        return $this->where('id_imagen_principal', $idImagenPrincipal)
                    ->findAll();
    }
}
