<?php

namespace App\Modules\PublicacionVehiculos\Models;

use Illuminate\Database\Eloquent\Model;

class TipoCombustible extends Model
{
    protected $table = 'combustibles';  
    protected $primaryKey = 'cod';
    public $timestamps = false;
    protected $fillable = ['cod', 'des'];
}
