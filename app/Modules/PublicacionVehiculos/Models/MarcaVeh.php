<?php

namespace App\Modules\PublicacionVehiculos\Models;

use Illuminate\Database\Eloquent\Model;

class MarcaVeh extends Model
{
    protected $table = 'marcas';  
    protected $primaryKey = 'cod';
    public $timestamps = false;
    protected $fillable = ['cod', 'des'];
}
