<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Alumno extends Model
{
    protected $table = 'alumno'; // Nombre de tu tabla en la base de datos
    // Otro código de tu modelo
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable = [
        'id',
        'nombre',
        'apellido',
        'edad',
        'fecha_nacimiento',
        'telefono',
        'email',  
    ];
}

