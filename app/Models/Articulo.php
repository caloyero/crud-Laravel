<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable = [
    'nombre', 'descripcion' , 'precio', 'urlfoto'];
}