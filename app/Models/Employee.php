<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'function',
        'phone',
    ];

    public function materials()
    {
        return $this->hasMany(Material::class);
    }

    public function anomalie()
    {
        return $this->hasMany(Anomalie::class);
    }
}
