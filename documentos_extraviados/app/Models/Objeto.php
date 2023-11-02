<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objeto extends Model
{
    protected $table="objeto";
    protected $primaryKey="id";
    protected $fillable=[ 'nombre_objeto','descripcion','lugar_extravio','fecha','descripcion_echos'];
    public $timestamps=false;
}
