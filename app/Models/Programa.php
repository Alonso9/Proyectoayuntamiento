<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    //use HasFactory;
    protected $table = 'programas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'usuario_id', 'fecha'
    ];

    public $timestamps = false;
}
