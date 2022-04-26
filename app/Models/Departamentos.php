<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    // use HasFactory;
    protected $table = 'departamentos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'actividad_id', 'responsable','fecha'
    ];

    public $timestamps = false;
}
