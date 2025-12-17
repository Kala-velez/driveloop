<?php


namespace App\Modules\PublicacionVehiculos\Models;
use Illuminate\Database\Eloquent\Model;

class ClaseVeh extends Model
{
    protected $table = 'clases';  
    protected $primaryKey = 'cod';
    public $timestamps = false; 
    protected $fillable = ['cod', 'des'];
}
