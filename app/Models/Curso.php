<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //protected $fillable =['name','description','categoria'];
    // en la primera forma escribimos los datos que no queremos que acepte
    protected $guarded =['status'];
    // en esta propiedad  le indicamos los compos que no queremois que sean
    //modificados
}