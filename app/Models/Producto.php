<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Define la tabla de la base de datos (si es diferente del nombre del modelo en plural)
    protected $table = 'productos';

    // Especifica qué atributos son asignables en masa
    protected $fillable = ['nombre', 'cantidad', 'precio'];
}

