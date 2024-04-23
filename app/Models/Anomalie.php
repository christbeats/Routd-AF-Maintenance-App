<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anomalie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'datedebut',
        'materiel',
        // 'chauffeur',
        'compteurKilometrique',
        'compteurHoraire',
        'commentaire',
        'file_path',
        'datefin',
    ];

    public function material()
    {
        return $this->belongsTo(Material::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
