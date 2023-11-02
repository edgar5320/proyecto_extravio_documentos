<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table="cliente";
    protected $primaryKey="id";
    protected $fillable=[ 'apellido','nombre','documento','telefono','email','objeto_id'];
    public $timestamps=false;

}
