<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anomalie extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function material()
    {
        return $this->belongsTo(Material::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function diagnostic()
    {
        return $this->hasMany(Diagnostic::class);
    }
}
