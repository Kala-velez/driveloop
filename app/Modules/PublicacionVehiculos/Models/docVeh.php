<?php

// namespace App\Models;
namespace App\Modules\PublicacionVehiculos\Models;

use Illuminate\Database\Eloquent\Model;

class docVeh extends Model
{
    protected $table = 'tipos_doc_vehiculo';  // <- tu tabla real
    protected $primaryKey = 'id';
    public $timestamps = false; // si tu tabla no tiene created_at / updated_at

    protected $fillable = ['nom', 'des']; // opcional, recomendado
}
