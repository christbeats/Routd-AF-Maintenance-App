<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostic extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function anomalie()
    {
        return $this->belongsTo(Anomalie::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
