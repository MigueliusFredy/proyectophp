<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $table = 'profesor';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable = [
        'id',
        'nombre',
        'apellido',
        'curso',
        'edad',
        'telefono',
        'email',  
    ];
}
