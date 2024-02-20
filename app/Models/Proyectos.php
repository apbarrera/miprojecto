<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    use HasFactory;

//$fillable: evitamos asignación masiva

    protected $fillable = [
        'nombre',
        'descripción'
    ];

//método boot: mientras se esté creando un nuevo proyecto, guardamos el usuario identificado en ese momento.

    protected static function boot() {

        parent::boot();
        static::creating(function($project) {

            $project->user_id = auth()->id();

        });
    }
}
