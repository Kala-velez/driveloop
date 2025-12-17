<?php

namespace App\Modules\PublicacionVehiculos\Models;

use Illuminate\Database\Eloquent\Model;

class LineasVeh extends Model
{
    protected $table = 'lineas';  
    protected $primaryKey = 'cod';
    public $timestamps = false;
    protected $fillable = ['cod', 'des', 'codmar'];

}
