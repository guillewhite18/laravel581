<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pet
 *
 * @property $id
 * @property $nombre
 * @property $tipo
 * @property $edad
 * @property $enfermedades
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pet extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'tipo' => 'required',
		'edad' => 'required',
		'enfermedades' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','tipo','edad','enfermedades'];



}
