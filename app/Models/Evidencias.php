<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidencias extends Model
{
    // use HasFactory;
    protected $table = 'evidencias';
    protected $primaryKey = 'id';
    protected $fillable = [
        'actividad_id', 'nombre_archivo','archivo'
    ];

    public $timestamps = false;
}
