<?php

// namespace App\Models;
namespace App\Modules\PublicacionVehiculos\Models;

use Illuminate\Database\Eloquent\Model;

class docVeh extends Model
{
    protected $table = 'tipos_doc_vehiculo';  
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['nom', 'des'];
}
