<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table = 'curso'; 
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'incio',
        'fin',  
    ];
}
