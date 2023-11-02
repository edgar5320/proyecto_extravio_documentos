<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $table="reporte";
    protected $primaryKey="id";
    protected $fillable=[ 'cliente_id'];
    public $timestamps=false;
}
